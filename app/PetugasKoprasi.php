<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PetugasKoprasi extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_tlpn', 'tgl_lahir', 'tmp_lahir'];
    public $timestamps = true;


    
}
