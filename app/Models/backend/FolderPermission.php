<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "folder_id",
        "department_type_id",
        "group_name",
        "group_id",
        "status",
    ];
}
