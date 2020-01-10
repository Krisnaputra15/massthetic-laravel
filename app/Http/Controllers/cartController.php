<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kontak;
use App\barang;
use App\kategori;
use App\review;
use App\transaksi;
use Cart;

class cartController extends Controller
{
    public function add($id){
        $dt_barang=barang::where('id',$id)->first();
    	$items=array(
    		'id'=>$id,
    		'name'=>$dt_barang->nama,
            'price'=>$dt_barang->harga,
            'folder'=>$dt_barang->id_kategori,
            'gambar'=>$dt_barang->foto,
    		'quantity'=>1,
    		);
    	Cart::add($items);
    	return redirect('produk-all');
    }
    public function delete($id){
        Cart::remove($id);
    	return redirect('produk-all');
    }
    public function clear(){
        Cart::clear();
        Session::flash('alert_pesan','All transactions have canceled');
        return redirect('produk-all');
       
    }
    public function checkout(){
    $kategori = kategori::all();
    return view('checkout',compact('kategori'));
    }
    public function simpan(request $request){
    $data =array(
        'tanggal'=>date('Y-m-d'),
        'nama'=>$request->nama,
        'email'=>$request->email,
        'order_address'=>$request->order_address,
        'city'=>$request->city,
        'country'=>$request->country,
        'zip_code'=>$request->zip_code,
        'telephone'=>$request->telephone,
        'order_notes'=>$request->order_notes,
        'payment'=>$request->payment,
        'nama_barang'=>$request->nama_barang,
    	'jumlah'=>$request->jumlah,
    	'total_bayar'=>$request->total_bayar
    );
    $simpan=transaksi::insert($data);
    Cart::clear();
    Session::flash('alert_pesan','Your transaction is successfull, thank you');
    return redirect('/');
    }
    
}
