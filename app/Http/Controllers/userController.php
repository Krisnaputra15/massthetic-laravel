<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\barang;
use App\kategori;
use Cart;

class userController extends Controller
{
    public function homepage(){
        $barang= barang::all();
        $kategori = kategori::all();
        return view('user.homepage',compact('barang','kategori'));
    }
}
