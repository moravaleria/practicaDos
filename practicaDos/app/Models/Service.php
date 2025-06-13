<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;

class services extends Model
{
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
    use HasFactory;
}
