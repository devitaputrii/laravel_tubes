<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TentangKami extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'img',
        'deskripsi',
    ];

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
