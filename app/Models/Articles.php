<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nentang_id',
        'title',
        'content',
        'image',
    ];

    public function nentang()
    {
        return $this->belongsTo(Nentangs::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
