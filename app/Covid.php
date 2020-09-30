<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $table = 'covidupdate';
    protected $fillable = ['kasus', 'sembuh', 'meninggal', 'tanggal_update'];
}
