<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = "modules";

    protected $fillable = [
        'module_cd',
        'module_name',
        'has_child',
        'is_parent',
        'child_id',
        'is_visible',
        'icon',
        'has_access',
            
     ];
}
