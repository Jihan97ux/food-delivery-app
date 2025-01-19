<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = ['nama_resto', 'kategori', 'email', 'no_telp', 'alamat', 'password'];
    protected $table = 'restaurants';
    public $timestamps = false;
}
