<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = [
    	'nama', 'email', 'alamat'
    ];
}
