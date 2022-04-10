<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = "consultations";
    protected $fillable = [
        'consultation_number',
         'datetime',
         'user_id',
         'service_id',
         'status_id',
            
     ];
}
