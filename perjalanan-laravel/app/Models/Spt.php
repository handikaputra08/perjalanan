<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spt extends Model
{
    protected $table = 'data_spt';
    protected $guarded = [];

    function nama_pegawai1() {
        return $this->belongsTo(Pegawai::class,'nama1','id');
    }
}
