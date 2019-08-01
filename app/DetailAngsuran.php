<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailAngsuran extends Model
{
    protected $fillable = ['tgl_jatuh_tempo', 'besar_angsuran'];
    public $timestamps = true;
}
