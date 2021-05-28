<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DateVaksin extends Model
{
    public function admin() {
        return $this-> hasOne('App\Models\Admin');
    }
    protected $table = 'datevaksin';
    
    protected $fillable = [
        'adminId',
        'tanggalBukaVaksin'
    ];
}
