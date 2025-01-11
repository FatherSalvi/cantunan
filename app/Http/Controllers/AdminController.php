<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;
use App\Models\OrderItem;

class AdminController extends Controller
{
    public function add_food()
    {
        return view('admin.add_food');
    }

    public function upload_food(Request $request)
    {
        $data = new Food;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $image = $request->img;
        $filename = time().'.'.$image->getClientOriginalExtension();
        $request->img->move('food_image',$filename);
        $data->image = $filename;
        $data->save();

        return redirect()->back();
    }

    public function view_food()
    {
        $data = Food::all();
        return view('admin.show_food',compact('data'));
    }

    public function delete_food($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_food($id)
    {
        $data = Food::find($id);
        return view('admin.update_food',compact('data'));
    }

    public function edit_food(Request $request, $id)
    {
        $data = Food::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;

        $image = $request->image;
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('food_image',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect('view_food');
    }

    public function orders()
    {
        $orders = Order::with(['items.food', 'location', 'user'])
                   ->whereNotIn('status', ['complete', 'cancelled'])
                   ->get();
        return view('admin.order',compact('orders'));
    }

    public function finished_orders()
    {
        $orders = Order::with(['items.food', 'location', 'user'])
                   ->whereIn('status', ['complete', 'cancelled'])
                   ->get();
        return view('admin.finished_order',compact('orders'));
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->status = $request->status;
        $order->delivery_status = $request->delivery_status;
        $order->save();

        return response()->json(['message' => 'Order status updated successfully.']);
    }

    public function updateDeliveryStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->delivery_status = $request->delivery_status;
        $order->save();

        return response()->json(['message' => 'Delivery status updated successfully.']);
    }
}
