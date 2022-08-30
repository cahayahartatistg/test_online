<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian_models';
    protected $fillable = ['tanggal', 'keterangan', 'total_harga'];
}