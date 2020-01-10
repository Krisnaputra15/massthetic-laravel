<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kontak;
use App\barang;
use App\kategori;
use App\review;
use Cart;

class productController extends Controller
{
    public function all(){
        $kategori = kategori::all();
        $barang = barang::all();
        $barang2 = barang::all()->count();
    return view('produk.all',compact('kategori','barang','barang2'));
    }
    public function plates(){
    $kategori = kategori::all();
    $barang = barang::where('id_kategori',3)->get();
    $barang2 = barang::where('id_kategori',3)->count();
    return view('produk.plates',compact('barang','barang2','kategori'));
    }
    public function barbell(){
    $kategori = kategori::all();
    $barang = barang::where('id_kategori',1)->get();
    $barang2 = barang::where('id_kategori',1)->count();
    return view('produk.barbell',compact('barang','barang2','kategori'));
    }
    public function dumbbell(){
    $kategori = kategori::all();
    $barang = barang::where('id_kategori',2)->get();
    $barang2 = barang::where('id_kategori',2)->count();
    return view('produk.dumbbell',compact('barang','barang2','kategori'));
    }
    public function forlegs(){
    $kategori = kategori::all();
    $barang = barang::where('id_kategori',4)->get();
    $barang2 = barang::where('id_kategori',4)->count();
    return view('produk.forlegs',compact('barang','barang2','kategori'));
    }
    public function gymset(){
    $kategori = kategori::all();
    $barang = barang::where('id_kategori',5)->get();
    $barang2 = barang::where('id_kategori',5)->count();
    return view('produk.gymset',compact('barang','barang2','kategori'));
    }
}
