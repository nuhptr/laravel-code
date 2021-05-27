<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DateVaksin extends Model
{
    public function transaction() {
        return $this-> hasMany('App\Models\Transaction');
    }

    public function admin() {
        return $this-> hasOne('App\Models\Admin');
    }
    protected $table = 'datevaksin';
    
    protected $fillable = [
        'adminID',
        'tanggalBukaVaksin'
    ];
}
