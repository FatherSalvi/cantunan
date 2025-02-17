<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>Cantunan | LIS 162</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="assets/css/foodhut.css">
    <style>
        .card {
            height: 450px; /* Adjust as per your needs */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }   

        .card img {
            object-fit: cover;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
        }

        .card-body h1 {
            margin-bottom: 10px;
        }

        .card-body h4 {
            margin-bottom: 10px;
        }

        .card-body p {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap; 
        }
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
   <!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallery</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Cantunan</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testmonial">Reviews</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="btn btn-primary"><b>Login</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Cantunan</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">Menu</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, quisquam accusantium nostrum modi, nemo, officia veritatis ipsum facere maxime assumenda voluptatum enim! Labore maiores placeat impedit, vero sed est voluptas!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita alias dicta autem, maiores doloremque quo perferendis, ut obcaecati harum, <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum necessitatibus iste,
                        nulla recusandae porro minus nemo eaque cum repudiandae quidem voluptate magnam voluptatum? <br>Nobis, saepe sapiente omnis qui eligendi pariatur. quis voluptas. Assumenda facere adipisci quaerat. Illum doloremque quae omnis vitae.</p>
                        <p><b>Lonsectetur adipisicing elit. Blanditiis aspernatur, ratione dolore vero asperiores explicabo.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ab itaque modi, reprehenderit fugit soluta, molestias optio repellat incidunt iure sed deserunt nemo magnam rem explicabo vitae. Cum, nostrum, quidem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Gallery Section  -->
<div id="gallery" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">OUR MENU</h2>
    </div>
    <div class="gallery row">
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-1.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-2.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-3.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-4.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-5.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-6.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-7.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-8.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-9.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-10.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-11.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallery-item wow fadeIn">
            <img src="{{ asset('assets/imgs/gallery-12.jpg') }}" alt="template by DevCRID http://www.devcrud.com/" class="gallery-img">
            <a href="#" class="gallery-overlay">
                <i class="gallery-icon ti-plus"></i>
            </a>
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">EVENTS AT THE FOOD HUT</h2>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                @foreach($data as $data)
                    <div class="col-md-4">
                        <div class="card bg-transparent border my-3 my-md-0">
                            <img height=250 src="food_image/{{$data->image}}" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                            <div class="card-body">
                                <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">₱{{$data->price}}</a></h1>
                                <h4 class="pt20 pb20">{{$data->title}} </h4>
                                <p class="text-white">{{$data->description}} </p>
                            </div>
                            <form action="">
                                <input type="number" min="1">
                                <input type="submit" value="Add to Cart">
                            </form>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">REVIEWS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">John Doe</h3>
                    <h6 class="testmonial-subtitle">Web Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum nobis eligendi, quaerat accusamus ipsum sequi dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Steve Thomas</h3>
                    <h6 class="testmonial-subtitle">UX/UI Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum minus obcaecati cum eligendi perferendis magni dolorum ipsum magnam, sunt reiciendis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Miranda Joy</h3>
                    <h6 class="testmonial-subtitle">Graphic Designer</h6>
                    <div class="testmonial-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, nam. Earum nobis eligendi, dignissimos consequuntur blanditiis natus. Aperiam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>FIND US</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, laboriosam doloremque odio delectus, sunt magnam laborum impedit molestiae, magni quae ipsum, ullam eos! Alias suscipit impedit et, adipisci illo quam.</p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span> 12345 Fake ST NoWhere, AB Country</p>
                    <p><span class="ti-support pr-3"></span> (123) 456-7890</p>
                    <p><span class="ti-email pr-3"></span>info@website.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL US</h3>
                <P class="text-muted">info@website.com</P>
            </div>
            <div class="col-sm-4">
                <h3>CALL US</h3>
                <P class="text-muted">(123) 456-7890</P>
            </div>
            <div class="col-sm-4">
                <h3>FIND US</h3>
                <P class="text-muted">12345 Fake ST NoWhere AB Country</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Made with <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com">DevCRUD</a></p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>
</html>
