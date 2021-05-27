<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function transaction() {
        return $this-> hasMany('App\Models\Transaction');
    }

    protected $table = 'user';
    
    protected $fillable = [
        'userName', 
        'email', 
        'password', 
        'tempatLahir', 
        'tanggalLahir', 
        'gender', 
        'NIK', 
        'phone', 
        'alamat'
    ];
}
