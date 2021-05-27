<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user() {
        return $this-> hasOne('App\Models\User');
    }

    public function vaksin(){
        return $this-> hasOne('App\Models\DateVaksin');
    }

    protected $table = 'transaction';
    
    protected $fillable = [
        'userID', 
        'date', 
        'location', 
        'totalPrice',
    ];
}
