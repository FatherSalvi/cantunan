<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Cart;
use App\Models\Location;
use App\Models\Order;
use App\Models\OrderItem;

class HomeController extends Controller
{
    public function welcome()
    {
        $data = Food::all();
        return view('welcome',compact('data'));
    }

    public function home()
    {
        $data = Food::all();
        return view('home.index',compact('data'));
    }

    public function add_cart(Request $request)
    {
        if(Auth::id())
        {
            $user_id = Auth::id();

            $request->validate([
                'food_id' => 'required|exists:food,id',
                'cart_quantity' => 'required|integer|min:1',
            ]);

            $existing_cart_item = Cart::where('user_id', $user_id)
            ->where('food_id', $request->food_id)
            ->first();

            if ($existing_cart_item) {
                // If it exists, update the quantity
                $existing_cart_item->cart_quantity += $request->cart_quantity;
                $existing_cart_item->save();
            } else {
                // If it does not exist, create a new cart entry
                Cart::create([
                    'food_id' => $request->food_id,
                    'user_id' => $user_id,
                    'cart_quantity' => $request->cart_quantity,
                ]);
            }
            return redirect()->back()->with('success', 'Food item added to cart successfully.');
        }
        else
        {
            return redirect('login');
        }
    }

    public function my_cart()
    {
        if (Auth::id()) 
        {
            $user_id = Auth::id();
            $cart_data = Cart::where('user_id', $user_id)
                ->join('food', 'carts.food_id', '=', 'food.id')
                ->select('carts.id', 'carts.cart_quantity', 'food.title', 'food.description', 'food.price', 'food.image')
                ->get();

            $total_price = $cart_data->sum(function ($item) {
                return $item->cart_quantity * $item->price;
            });

            $locations = Location::orderBy('name', 'asc')->get();

            return view('home.my_cart', compact('cart_data','total_price','locations')); 
        } 
        else 
        {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirm_order(Request $request)
    {
        $user_id = Auth::id();
        $cart_items = Cart::with('food')->where('user_id', $user_id)->get();

        if ($cart_items->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'location_id' => 'required|exists:locations,id',
        ]);

        $total_price = $cart_items->sum(function ($item) {
            return $item->food ? $item->cart_quantity * $item->food->price : 0;
        });

        $order = Order::create([
            'user_id' => $user_id,
            'name' => $request->name,
            'location_id' => $request->location_id,
            'total_price' => $total_price,
            'status' => 'Pending',
            'delivery_status' => 'In Progress',
        ]);

        foreach ($cart_items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'food_id' => $item->food_id,
                'quantity' => $item->cart_quantity,
                'price' => $item->food->price,
            ]);
        }

        Cart::where('user_id', $user_id)->delete();

        return redirect()->route('my_cart')->with('success', 'Order placed successfully!');
    }

    public function order_status()
    {
        $user_id = Auth::id();
        $orders = Order::with(['items.food', 'location',])
                        ->where('user_id', $user_id)
                        ->orderBy('updated_at','desc')
                        ->get();
        return view('home.order_status',compact('orders'));
    }
}