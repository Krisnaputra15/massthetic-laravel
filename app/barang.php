<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table="barang";
    protected $primarykey="id";
    protected $fillable=["nama","deskripsi","harga","jumlah","foto","id_kategori"];
    public $timestamps=false;
    
    public function kategori(){
        return $this->belongsTo('App\kategori','id_kategori');
    }
    public function review(){
        return $this->hasMany('App\review','id');
    }
}
