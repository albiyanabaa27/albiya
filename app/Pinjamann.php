<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjamann extends Model
{
    protected $fillable = ['nama_pinjaman', 'anggotas_id', 'besar_pinjaman', 'tgl_pengajuan_pinjaman', 'tgl_acc_pinjaman',
                            'tgl_pinjaman', 'tgl_pelunasan', 'angsurans_id'];
    public $timestamps = true;
}
