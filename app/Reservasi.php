<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $table = 'trs_reservasi';
    protected $fillable = [
        'id_user','id_kamar','tanggal','checkin','checkout'
    ];
}
