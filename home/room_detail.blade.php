@include ('home.header')
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{ asset('images/loading.gif') }}" alt="#" /></div>
    </div> --}}
    <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Room</h2>
                        <p>Lorem Ipsum available, but the majority have suffered </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="serv_hover" class="room">
                        <div style="padding:20px" class="room_img">
                            <figure><img style="height: 350px; width:800px" src="/room/{{ $room->gambar }}" alt="#" /></figure>
                        </div>
                        <div class="bed_room">
                            <h2>{{ $room->nama_kamar }}</h2>
                            <p style="padding: 12px">{{ Str::limit($room->deskripsi, 75) }}</p>
                            <h4 style="padding: 12px">Free Wifi : {{ $room->wifi }}</h4>
                            <h4 style="padding: 12px">Type Kamar : {{ $room->type_kamar }}</h4>
                            <h3 style="padding: 12px">Harga : {{ $room->harga }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h1 style="font-size: 40px!important">Boking kamar</h1>
                    <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session()->get('message') }}
                            @endif
                        </div>
                        
                            @if($errors)
                            @foreach ($errors->all() as $errors)
                                <li style="color: red"> 
                                    {{ $errors }}</li>
                            @endforeach
                            @endif
                        @if (Auth::check())
                    <form action="{{ url('add_booking',$room->id) }}"method="post">
                        @csrf
                        <div>
                            <label for="floatingInput">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="nama">
                        </div>
                        <div>
                            <label for="floatingInput">Email</label>
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        </div>
                        <div>
                            <label for="floatingInput">No Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="floatingInput" placeholder="masukan no telepon">
                        </div>
                        <div>
                            <label for="floatingInput">Check In</label>
                            <input type="date" name="start_date" class="form-control" id="floatingInput" placeholder="start_date">
                        </div>
                        <div>
                            <label for="floatingInput">Check Out</label>
                            <input type="date" name="end_date" class="form-control" id="floatingInput" placeholder="end_date">
                        </div>
                        <div style="width: 200px; padding: 20px;">
                            <input type="submit" class="btn btn-primary" value="Booking kamar">
                        </div>
                    @else 
                        <p class ="alert alert-danger">Silahkan login terlebih dahulu untuk melakukan booking kamar.
                        </p>
                        <a class="btn btn-danger" href="{{ url('/login')}}">Login</a>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
        @include('home.footer')
        <script type = "Text/javascript">
                $(document).ready(function(){
                    var dtToday = new Date();
                    var month = dtToday.getMonth() + 1;
                    var day = dtToday.getDate();
                    var year = dtToday.getFullYear();

                    if(month < 10)
                        month = '0' + month.toString();
                    if(day < 10)
                        day = '0' + day.toString();

                    var maxDate = year + '-' + month + '-' + day;

                    $('#start_date').attr('min', maxDate);
                    $('#end_date').attr('min', maxDate);
                });
                </script>
                <script src="{{ asset ('js/jquery.min.js')}}"></script>
                <script src="{{ asset ('js/bootstrap.bundle.min.js')}}"></script>
                <script src="{{ asset ('js/jquery-3.0.0.min.js')}}"></script>
                <!-- sidebar -->
                <script src="{{ asset ('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
                <script src="{{ asset ('js/custom.js')}}"></script>

</body>


