@extends('template.admin')
@section('konten')
<section class="content">
        <div class="container-fluid">
            
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Daftar Akun Massthetic
                               
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
                                        <th>Email</th>
                                        <th>Nomer HP</th>
                                        <th>Alamat</th>
                                        <th>Username</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kontak as $k)
                                    <tr>
                                        <td>{{$k->nama}}</td>
                                        <td>{{$k->email}}</td>
                                        <td>{{$k->nohp}}</td>
                                        <td>{{$k->alamat}}</td>
                                        <td>{{$k->username}}</td>
                                        @if($k->id_kategori == 2)
                                        <td>User</td>
                                        @else
                                        <td>Admin</td>
                                        @endif
                                        <td>
                                            @if($k->nama == Session('nama'))
                                            <a href="{{url('edit')}}" style="btn btn-primary m-t-15 waves-effect">Edit</a>
                                            <a href="{{url('delete')}}" style="btn btn-danger">Delete</a>
                                            @else

                                            @endif
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            <p>Jumlah akun : {{$kontak2}}</p>
                            <center>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect"><a href="{{url('add')}}">Tambah Akun</a></button>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
            <!-- #END# Basic Table -->
@endsection