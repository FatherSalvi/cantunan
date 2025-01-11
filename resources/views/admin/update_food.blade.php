<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
    <style>
        .div_deg
        {
            padding:10px;
        }

        label
        {
            display:inline-block;
            width:200px;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h1>Update Food</h1>
            <form action="{{url('edit_food',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="div_deg">
                    <label for="">Name</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div class="div_deg">
                    <label for="">Description</label>
                    <textarea type="text" name="description" cols="50" rows="5">{{$data->description}}</textarea>
                </div>
                <div class="div_deg">
                    <label for="">Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>
                <div class="div_deg">
                    <label for="">Current Image</label>
                    <img src="food_image/{{$data->image}}" alt="" width="150">
                </div>
                <div class="div_deg">
                    <label for="">Change Image</label>
                    <input type="file" name="image">
                </div>
                <div class="div_deg">
                    <input class="btn btn-warning" type="submit" value="Update Food">
                </div>
            </form>


          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>