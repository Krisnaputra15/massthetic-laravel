<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Kontak;
use App\barang;
use App\kategori;
use App\review;
use App\transaksi;

class adminController extends Controller
{
    public function __construct(){
        $this->middleware('cek_login');
    }
    public function homepage(){
    $kontak = kontak::all();
    $kontak2 = kontak::all()->count();
    $barang = barang::all();
    $barang2 = barang::all()->count();
    $transaksi = transaksi::all();
    $transaksi2 = transaksi::all()->count();
        return view('admin.homepage',compact('kontak','kontak2','barang','barang2','transaksi','transaksi2'));
    }
    public function user(){
    $kontak = kontak::all();
    $kontak2 = kontak::all()->count();
    return view('admin.user.user',compact('kontak','kontak2'));
    }
    public function barang(){
    $barang = barang::where('id_kategori',1)->get();
    $barang2 = barang::where('id_kategori',2)->get();
    $barang3 = barang::where('id_kategori',3)->get();
    $barang4 = barang::where('id_kategori',4)->get();
    $barang5 = barang::where('id_kategori',5)->get();
    return view('admin.barang.barang',compact('barang','barang2','barang3','barang4','barang5'));
    }
    public function add_barang(){
    $kategori = kategori::all();
    return view('admin.barang.create',compact('kategori'));
    }
    public function store_barang(request $request){
    if($request->hasFile('foto')){
       $barang = barang::create($request->all());
       $request->file('foto')->move('img/'.$request->id_kategori.'/',$request->file('foto')->getClientOriginalName());
       $barang->foto=$request->file('foto')->getClientOriginalName();
       $barang->save();
    }
    else{
       $barang = barang::create($request->all());
       $barang->save();
    }
    return redirect('barang');
    }
    public function transaksi(){
    $transaksi = transaksi::all();
    return view('admin.transaksi.transaksi',compact('transaksi'));
    }
}
