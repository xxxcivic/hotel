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
                        <div class="title"><strong>update Kamar</strong></div>
                        <div class="block-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <form action="{{url('edit_kamar',$data->id)}}" method="Post" enctype="multipart/form-data" class="form-horizontal">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">nama kamar</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="kamar" value="{{ $data->nama_kamar }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">deskripsi</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{ $data->deskripsi}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">harga</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="harga" value="{{ $data->harga }}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">type kamar</label>
                                    <div class="col-sm-9">
                                        <select name="type" class="form-control mb-3 mb-3">
                                            <option selected value="{{ $data->type_kamar }}">{{ $data->type_kamar }}</option>
                                            <option value="reguler">Reguler</option>
                                            <option value="premium">Premium</option>
                                            <option value="delux">Delux</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">free wifi</label>
                                    <div class="col-sm-9">
                                        <select name="wifi" class="form-control mb-3 mb-3">
                                            <option selected value="{{ $data->wifi }}">{{ $data->wifi }}</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Gambar Sebelumnya</label>
                                    <div class="col-sm-9">
                                        <img width="100" src="/room/{{ $data->gambar}}" alt="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 form-control-label">Upload Gambar</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="gambar" class="form-control">
                                    </div>
                                </div>
                                <div class="line"></div>
                                <div class="form-group row">
                                    <div class="col-sm-9 ml-auto">
                                        <button type="submit" value="" class="btn btn-primary">Update Room</button>
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
