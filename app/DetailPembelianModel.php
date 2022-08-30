<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailPembelianModel extends Model
{
    protected $table = 'detail_pembelian_models';
    protected $fillable = ['kode_barang', 'qty', 'harga'];


    public function barang()
    {
        return $this->belongsToMany('App\BarangModel', 'kode_barang', 'id');
    }
}