<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $fillable = ['nama', 'alamat', 'tgl_lahir', 'tmp_lahir', 'jk', 'status', 'no_tlpn'];
    public $timestamps = true;

public function simpanan() {
    return $this->hasMany('App\Simpanan', 'anggotas_id');
}

public function angsuran() {
    return $this->hasMany('App\Angsuran', 'anggotas_id');
}

public function pinjaman() {
    return $this->hasMany('App\Pinjaman', 'anggotas_id');
}

}

