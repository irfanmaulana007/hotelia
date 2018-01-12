<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'ms_hotel';
    protected $fillable = [
        'nama','alamat'
    ];
}
