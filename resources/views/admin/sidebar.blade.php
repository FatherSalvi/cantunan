
<!-- Sidebar Navigation-->
<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{ asset('assets/Cho_PFP.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Kyung Hyun S. Cho</h1>
      <p>LIS 162 Student</p>
    </div>
  </div>
  <!-- Sidebar Navigation Menus--><span class="heading" style="color:#F85C70">Main</span>
  <ul class="list-unstyled">
          <li><a href="{{ route('admin.index')}}"> <i class="icon-home"></i>Home </a></li>
          <li><a href="#foodDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Food</a>
            <ul id="foodDropdown" class="collapse list-unstyled ">
              <li><a href="{{url('add_food')}}">Add Food</a></li>
              <li><a href="{{url('view_food')}}">View Food</a></li>
            </ul>
          </li>
          <li><a href="#orderDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-chart"></i>Orders</a>
            <ul id="orderDropdown" class="collapse list-unstyled ">
              <li><a href="{{url('orders')}}">Pending Orders</a></li>
              <li><a href="{{url('finished_orders')}}">Completed Orders</a></li>
            </ul>
          </li>
            <div align="center">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <input class="btn btn-primary m-2" type="submit" value="Logout">
              </form>
            </div>
          </li>
  </ul>
  <!--        
  </ul><span class="heading">Extras</span>
  <ul class="list-unstyled">
    <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
    <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
  </ul>
  -->
</nav>
<!-- Sidebar Navigation end-->
