<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function transaction() {
        return $this-> hasOne('App\Models\DateVaksin');
    }
  
    protected $fillable = [
        'id',
        'name',
        'email',
        'hospital',
    ];
}