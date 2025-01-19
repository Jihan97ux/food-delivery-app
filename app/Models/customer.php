<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = ['nama_depan', 'nama_belakang', 'tanggal_lahir', 'email', 'password'];
    protected $table = 'customers';
    public $timestamps = false;
}
