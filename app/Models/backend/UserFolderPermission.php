<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFolderPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        "folder_permission_list_id",
        "user_id",
        "status",
        "access_given_by",
    ];

    public function getSubFolders(){
        return $this->belongsTo(SubFolder::class, 'folder_permission_list_id');
    }
}
