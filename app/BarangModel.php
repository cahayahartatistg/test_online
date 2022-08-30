<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang_models';
    protected $fillable = ['kode_barang', 'nama_barang','harga'];
}