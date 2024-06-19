<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'status'
    ];
    public function getDepartId()
    {
        return $this->hanMany(User::class, 'role_type_id');
    }
}
