<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;
    protected $guarded=['created_at','updated_at'];

    public function forecasts(){
        return $this->hasMany(Forecast::class);
    }
}
