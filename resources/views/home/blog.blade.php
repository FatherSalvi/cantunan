<!-- BLOG Section  -->
<div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Menu</h2>

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
                                @if (Route::has('login'))
                                @auth
                                <form action="{{ route('add_cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="food_id" value="{{ $data->id }}">
                                    <input type="number" name="cart_quantity" min="1" value="1">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                                @else
                                <br>
                                @endauth
                                @endif
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>       
        </div>
    </div>