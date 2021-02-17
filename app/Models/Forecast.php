<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function weather(){
        return $this->belongsTo(Weather::class);
    }
}
