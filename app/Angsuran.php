<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $fillable = ['kategori_pinjamens_id', 'anggotas_id', 
                          'tgl_pembayaran', 'angsuran_ke', 'besar_angsuran'];
    public $timestamps = true;
}
