<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPinjaman extends Model
{
    protected $fillable = ['nama_pinjaman'];
    public $timestamps = true;
}
