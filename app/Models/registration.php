<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    protected $fillable = ['nama_depan', 'nama_belakang', 'tanggal_lahir', 'email', 'password'];
    protected $table = 'registration';
    public $timestamps = false;
}
