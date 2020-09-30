<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rsud extends Model
{
    protected $table = 'rsud';
    protected $fillable = ['nama_rsud', 'alamat', 'no_telp', 'jadwal_buka', 'about', 'avatar'];
}



	