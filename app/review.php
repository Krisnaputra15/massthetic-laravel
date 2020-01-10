<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    protected $table="review";
    protected $primarykey="id";
    protected $fillable=["nama_user","rating","email","deskripsi","id_barang"];
    public $timestamps=false;

    public function barang(){
        return $this->belongsTo('App\barang','id_barang');
    }
}
