<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ulasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'rating',
        'ulasan',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
