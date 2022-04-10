<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = "appointments";

    protected $fillable = [
       'appointment_number',
        'datetime',
        'user_id',
        'service_id',
        'status_id',
           
    ];
}
