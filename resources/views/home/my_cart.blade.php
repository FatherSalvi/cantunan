<!DOCTYPE html>
<html lang="en">
<head>
	@include('home.css')
    <style>
        table {
            margin:40px;
            border:1px solid #F85C70;
            padding:40px;
        }

        th {
            padding:10px;
            text-align:center;
            background-color:#F85C70;
            color:white;
            font-weight:bold;
        }

        td {
            padding:10px;
            color:white;
        }

        .div_center {
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:50px;
        }

        label {
            display:inline-block;
            width:200px;
        }

        .div_deg {
            padding:5px;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#blog">Menu<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/cantunan_logo.png" class="brand-img" alt="" height="85">
                <span class="brand-txt">Cantunan</span>
            </a>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('order_status')}}">Order Status</a>
                </li>
                @if (Route::has('login'))
                @auth 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my_cart') }}">Cart</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input class="btn btn-primary" type="submit" value="Logout">
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="btn btn-primary"><b>Login</b></a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </nav>
    <br><br><br>
    <div id="gallery" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <table>
            <tr>
                <th>Food Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            @foreach($cart_data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->description}}</td>
                <td>₱{{ number_format($data->price, 2) }}</td>
                <td>{{$data->cart_quantity}}</td>
                <td>
                    <img src="/food_image/{{ $data->image }}" alt="{{ $data->title }}" width="150">
                </td>
                <td>
                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{url('remove_cart',$data->id)}}">Remove</a>
                </td>
            </tr>

            @endforeach
        </table>
        <h3>Total Price: ₱{{ number_format($total_price, 2) }}</h3>
    </div>
    <div class="div_center">
        <form action="{{url('confirm_order')}}" method="post">
            @csrf
            <div class="div_deg">
                <label for="">Recipient Name</label>
                <input type="text" name="name" value="{{Auth()->user()->name}}">
            </div>
            <div class="div_deg">
                <label for="location_id">Delivery Location:</label>
                <select name="location_id" id="location_id" required>
                    <option value="" disabled selected>Select a location</option>
                    @foreach ($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="div_deg">
                <input class="btn btn-info" type="submit" value="Confirm Order">
            </div>
        </form>
    </div>
</body>
</html>
