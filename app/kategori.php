<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table="kategori_barang";
    protected $primarykey="id";
    protected $fillable=["nama_kategori"];
    public $timestamps = false;

    public function barang(){
        return $this->hasMany('App/barang','id');
    }
}
