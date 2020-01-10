@extends('template.admin')
@section('konten')
<section class="content">
        <div class="container-fluid">
           

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tambah Barang
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="{{url('store_barang')}}" method="POST">
                                @csrf
                                <label for="email_address">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama barang">
                                    </div>
                                </div>
                                <label for="password">Deskripsi</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi barang"></textarea>
                                    </div>
                                </div>
                                <label for="email_address">Harga</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="harga" class="form-control" placeholder="Dalam dollar">
                                    </div>
                                </div>
                                <label for="email_address">Jumlah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" name="jumlah" class="form-control" placeholder="Jumlah barang">
                                    </div>
                                </div>
                                <label for="exampleFormControlTextArea">Foto</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <label for="email_address">Kategori</label>
                                <div class="form-group">
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                    <select class="form-control show-tick" name="id_kategori">
                                    @foreach($kategori as $k)
                                        <option value="{{$k->id}}">{{$k->nama_kategori}}</option>
                                    @endforeach
                                    </select>
                                </div>
                               </div>
</div>
                                <br>
                                <button type="Submit" class="btn btn-danger m-t-15 waves-effect">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
@endsection