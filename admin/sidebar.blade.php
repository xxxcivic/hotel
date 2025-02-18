<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset ('admin/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class=""><a href="{{url('home')}}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>kamar hotel </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled @if (Request::is('data_kamar') || Request::is('createdd_kamar'))show @endif">
                <li class="@if (Request::is('data_kamar')) active @endif">
                <a href="{{ url('data_kamar')}}">Data kamar</a></li>
                <li class="@if (Request::is('create_kamar')) active @endif">
                  <a href="{{ url('create_kamar')}}">tambah kamar</a></li>
              </ul>
            </li>
            <li class="@if (Request::is('data_booking')) active @endif">
              <a href="{{ url('data_booking') }}"> <i class ="icon-grid"></i>Data Booking</a></li>
    </ul>
  </nav>
  <!-- Sidebar Navigation end-->