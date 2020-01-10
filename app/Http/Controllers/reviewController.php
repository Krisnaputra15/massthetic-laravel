<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;
use Cart;

class reviewController extends Controller
{
    public function store_review(request $request){
        $store=review::create($request->all());
        return redirect('/product-'.$request->id_barang);
    }
}
