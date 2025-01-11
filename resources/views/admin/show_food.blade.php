<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        table
        {
            border:1px solid #F85C70;
            margin:auto;
            width:800px;
        }

        th
        {
            background:#F85C70;
            color:white;
            padding:10px;
            margin:10px;
        }

        td
        {
            color:white;
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
            <div>
                <h1>All Food</h1>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->title}}</td>
                        <td>{{$data->description}}</td>
                        <td>₱{{ number_format($data->price, 2) }}</td>
                        <td>
                            <img width="150" src="food_image/{{$data->image}}" alt="">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{url('update_food',$data->id)}}">Update</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" onclick="return confirm('Do you really want to delete this?')" href="{{url('delete_food',$data->id)}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>