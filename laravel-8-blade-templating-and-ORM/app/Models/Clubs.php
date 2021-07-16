<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    // use HasFactory;

    public $table = "clubs";

    protected $fillable =[
        "stadiums_id",
        "name",
        "logo",
        "url",
        "thropy",
        "created_at",
        "update_at"
    ];

    // TODO : relationship
    public function stadiums() {
        return $this->belongsTo("App\Models\Stadiums", "stadiums_id", "id");
    }

    public function players() {
        return $this->hasMany("App\Models\Players", "clubs_id");
    }

    public function managers() {
        return $this->hasMany("App\Models\Managers", "clubs_id");
    }

    public function matches_club() {
        return $this->hasOne("App\Models\Matches", "clubs_id");
    }

    public function matches_rival() {
        return $this->hasOne("App\Models\Matches", "clubs_id");
    }
}
