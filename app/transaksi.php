<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table="transaksi";
    protected $primarykey="id";
    protected $fillable=["tanggal","nama","email","order_address","city","country","zip_code","telephone","order_notes","payment","nama_barang","jumlah","total_bayar"];
    public $timestamps = false;
}
