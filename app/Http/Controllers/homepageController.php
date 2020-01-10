<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Cart;
use App\Kontak;
use App\barang;
use App\kategori;
use App\review;

class homepageController extends Controller
{
    
    public function awal(){
        $barang= barang::all();
        $kategori = kategori::all();
        return view('home',compact('barang','kategori'));
    }
    public function login(){
        return view('login');
    }
    public function produk($id){
        $barang= barang::findOrFail($id);
       if(DB::table('Review')->where('id_barang', '=', $id)->count() != 0){
        $kategori = kategori::all();
        $review= review::where('id_barang',$id)->get();
        $review2= review::where('id_barang',$id)->count();
        $barang2=DB::table('barang')->where('id','<>',$id,'and','id_kategori','=',$barang->id_kategori)->get();
        $q = DB::table('Review')->where('id_barang', '=', $id)->count();
        $q1=DB::table('review')->where('rating', '=', 5,'and','id_barang',$id)->count();
        $q2=DB::table('review')->where('rating', '=', 4,'and','id_barang',$id)->count();
        $q3=DB::table('review')->where('rating', '=', 3,'and','id_barang',$id)->count();
        $q4=DB::table('review')->where('rating', '=', 2,'and','id_barang',$id)->count();
        $q5=DB::table('review')->where('rating', '=', 1,'and','id_barang',$id)->count();
        $total = $q1+$q2+$q3+$q4+$q5;
        $rata = $total/$q;
        return view('product',compact('barang','review','review2','kategori','barang2','q','q1','q2','q3','q4','q5','total','rata'));
    }
    else{
        $kategori = kategori::all();
        $review= review::where('id_barang',$id)->get();
        $review2= review::where('id_barang',$id)->count();
        $barang2=DB::table('barang')->where('id','<>',$id,'and','id_kategori','=',$barang->id_kategori)->get();
        $q = DB::table('review')->where('id_barang', '=', $id)->count();
        $q1=DB::table('review')->where('rating', '=', 5,'and','id_barang','=',$id)->count();
        $q2=DB::table('review')->where('rating', '=', 4,'and','id_barang','=',$id)->count();
        $q3=DB::table('review')->where('rating', '=', 3,'and','id_barang','=',$id)->count();
        $q4=DB::table('review')->where('rating', '=', 2,'and','id_barang','=',$id)->count();
        $q5=DB::table('review')->where('rating', '=', 1,'and','id_barang','=',$id)->count();
        $total = $q1+$q2+$q3+$q4+$q5;
        return view('product',compact('barang','review','review2','kategori','barang2','q','q1','q2','q3','q4','q5','total'));
    }
        
        
        
    }
    public function search(request $request){
        $kategori = kategori::all();
    $search = $request->search;

    $search2 = DB::table('barang')
    ->where('nama','like','%'.$search.'%')
    ->get();

    return view('search',compact('search','search2','kategori'));
    }
   
}
