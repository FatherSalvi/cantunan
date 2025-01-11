<!-- Navbar -->
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
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home.index') }}#blog">Menu<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/cantunan_logo.png" class="brand-img" alt="" height=85>
                <span class="brand-txt">Cantunan</span>
            </a>

            <ul class="navbar-nav">
                @if (Route::has('login'))
                @auth 
                <li class="nav-item">
                    <a class="nav-link" href="{{route('order_status')}}">Order Status</a>
                </li>
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
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Cantunan</h1>
            <h2 class="display-4 mb-5">UP Diliman Food Hub</h2>
            <a class="btn btn-lg btn-primary" href="#blog">Menu</a>
        </div>
    </header>