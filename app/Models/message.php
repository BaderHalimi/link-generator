<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'schats_id',
        'message',
        'additional_data'
    ];
    protected $casts = [
        'additional_data' => 'array',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function schats()
    {
        return $this->belongsTo(schat::class);
    }
}
