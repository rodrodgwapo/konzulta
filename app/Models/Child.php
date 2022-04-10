<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $table = "children";

    protected $fillable = [
        'module_parent_id',
        'child_cd',
        'child_name',
        'has_sub_child',
        'sub_child_id',
        'is_visible',
        'icon',
        'has_access',
            
     ];
}
