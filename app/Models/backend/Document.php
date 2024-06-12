<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
       'name',
       'main_category_id',
       'sub_category_id',
       'description',
       'role_type_id',
       'user_id',
       'start_date',
       'start_time',
       'end_date',
       'end_date',
       'can_download',
       'doc_file',
       'admin_id',
       'disk',
       'status'

    ];
}
