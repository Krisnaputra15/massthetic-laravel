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
                               Barang di Website Massthetic
                               
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
                                        <th>Kategori</th>
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
                                        <td>{{!empty($k->kategori_barang->id) ? $k->kategori_barang->nama_kategori : '-'}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            <p>Jumlah barang : {{$barang2}}</p>
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
                                        

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            <p>Jumlah akun : {{$kontak2}}</p>
                            <center>
                            
                            </center>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Basic Table -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Daftar Transaksi di Website Massthetic
                               
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
                                        
                                        <th>Tanggal</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Alamat Pengiriman</th>
                                        <th>Kota</th>
                                        <th>Negara</th>
                                        <th>Kode Pos</th>
                                        <th>Nomer Telepon</th>
                                        <th>Note Order</th>
                                        <th>Pembayaran</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Total Pembayaran</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transaksi as $k)
                                    <tr>
                                        <td>{{$k->tanggal}}</td>
                                        <td>{{$k->nama}}</td>
                                        <td>{{$k->email}}</td>
                                        <td>{{$k->order_address}}</td>
                                        <td>{{$k->city}}</td>
                                        <td>{{$k->country}}</td>
                                        <td>{{$k->zip_code}}</td>
                                        <td>{{$k->telephone}}</td>
                                        <td>{{$k->order_notes}}</td>
                                        <td>{{$k->payment}}</td>
                                        <td>{{$k->nama_barang}}</td>
                                        <td>{{$k->jumlah}}</td>
                                        <td>${{$k->total_bayar}}.00</td>
                                       

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>    
                            <p>Jumlah transaksi : {{$transaksi2}}</p>
                            
                        </div>
                    </div>
                </div>
            </div>
 
            
        </center> 
        </div>
</section>
            
@endsection