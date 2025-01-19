<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['nama_depan', 'nama_belakang', 'tanggal_lahir', 'email', 'password', 'role'];
    protected $table = 'users';
    public $timestamps = false;
}