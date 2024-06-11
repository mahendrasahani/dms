<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_types extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "name",
        "user_id",
        "status"
    ];
}
