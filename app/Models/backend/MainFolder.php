<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainFolder extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "department_type_id"
    ];
}
