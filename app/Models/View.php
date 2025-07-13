<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $fillable = [
        'link_id',
        'user_id',
        'ip_address',
        'user_agent',
        'additional_data',
    ];
    protected $casts = [
        'additional_data' => 'array',
    ];
    public function link()
    {
        return $this->belongsTo(Link::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
