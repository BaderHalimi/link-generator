<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schat extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'additional_data'
    ];
    protected $casts = [
        'additional_data' => 'array',
    ];
}
