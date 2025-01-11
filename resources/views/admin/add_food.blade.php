<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        label 
        {
            display:inline-block;
            width:200px;
            color:white;
        }

        .div_deg 
        {
            padding:10px;
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
            
            <form action="{{url('upload_food')}}" method="post" enctype="multipart/form-data">
                @csrf 
                <div class="div_deg">
                    <h1>Add Food</h1>
                </div>
                <div class="div_deg">
                    <label for=""><b>Food name:</b></label>
                    <input type="text" name="title" required>
                </div>
                <div class="div_deg">
                    <label for=""><b>Description:</b></label>
                    <textarea name="description" cols="50" rows="5" required></textarea>
                </div>
                <div class="div_deg">
                    <label for=""><b>Price:</b></label>
                    <input type="text" name="price" required>
                </div>
                <div class="div_deg">
                    <label for=""><b>Image:</b></label>
                    <input type="file" name="img" required>
                </div>
                <div class="div_deg">
                    <input type="submit" name="Add Food" class="btn btn-warning">
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