<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;
use App\Models\Service;

class appointments extends Model
{
    use HasFactory;
    public function car()
    {
        return $this->belongsTo(Car::class,'car_id');
    }

    public function service()
    {
        return $this->belongsTo(Sevice::class,'service_id');
    }
}
