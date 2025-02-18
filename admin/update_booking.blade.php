<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="block">
                        <div class="title"><strong>update Booking</strong></div>
                        <div class="block-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{url('edit_booking',$bookings->id)}}" method="Post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">nama lengkap</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="nama" value="{{$bookings->nama}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">email</label>
                                    <div class="col-sm-9">
                                        <input type="email" value="{{$bookings->email}}" name="email" rows="3"></input>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">no telepon</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="telepon" value="{{ $bookings->telepon }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">status</label>
                                    <div class="col-sm-9">
                                        <select name="status" class="form-control mb-3 mb-3">
                                            <option selected value="{{ $bookings->status }}">{{ $bookings->status }}</option>
                                            <option value="cancel">Cancel</option>
                                            <option value="confrim">Confrim</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">start date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="start_date" value="{{ $bookings->start_date }}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">end date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="end_date" value="{{ $bookings->end_date  }}" class="form-control">
                                    </div>
                                </div>

                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-auto">
                                        <button type="submit" value="" class="btn btn-primary">Update Booking</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.footer')
</body>

</html>