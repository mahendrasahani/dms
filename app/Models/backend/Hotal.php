<?php

namespace App\Models\backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotal extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'user_id',
        'status'

    ];
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
