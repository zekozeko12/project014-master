<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ujian extends Model
{
    //
    protected $table='ujian';
    protected $fillable=['nanaCustomer','jenisMotor','tglPenyewaan','tglPengembalian','user','updated_at'];
}
