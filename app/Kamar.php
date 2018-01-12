<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'ms_kamar';
    protected $fillable = [
        'id_hotel','tipe','harga'
    ];
}
