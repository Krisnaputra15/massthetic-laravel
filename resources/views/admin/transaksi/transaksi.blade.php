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
                                        <th>Aksi</th>
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
        </div>
</section>
            <!-- #END# Basic Table -->
@endsection