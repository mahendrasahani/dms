<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'url',
        'permission_name',
        'route_name',
        'order',
        'parent_menu_id',
        'status',
        'display_name', 
        'icon'
    ];
}
