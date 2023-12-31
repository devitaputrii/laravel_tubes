<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kontak extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'deskripsi',
        'no_hp',
        'alamat',
    ];

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
