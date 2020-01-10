@extends('template.admin')
@section('konten')
<section class="content">
        <div class="container-fluid">
        <div class="block-header">
                <h2>Daftar Barang di Website Massthetic</h2>
            </div>
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Barbell
                               
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>File foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>Deskripsi tidak muat</td>
                                        <td>${{$k->harga}}.00</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>{{$k->foto}}</td>
                                        <td>
                                           
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            
                            <center>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Dumbell
                               
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>File foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang2 as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>Deskripsi tidak muat</td>
                                        <td>${{$k->harga}}.00</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>{{$k->foto}}</td>
                                        <td>
                                           
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            
                            <center>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Plates
                               
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>File foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang3 as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>Deskripsi tidak muat</td>
                                        <td>${{$k->harga}}.00</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>{{$k->foto}}</td>
                                        <td>
                                           
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            
                            <center>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               For Legs
                               
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>File foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang4 as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>Deskripsi tidak muat</td>
                                        <td>${{$k->harga}}.00</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>{{$k->foto}}</td>
                                        <td>
                                           
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            
                            <center>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Gym Set
                               
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
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>File foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($barang5 as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>Deskripsi tidak muat</td>
                                        <td>${{$k->harga}}.00</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>{{$k->foto}}</td>
                                        <td>
                                           
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            
                           
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
 <center>
            <a href="{{url('add_barang')}}" class="btn btn-primary m-t-15 waves-effect">Tambah Akun</a>
        </center> 
        </div>
</section>
            
@endsection