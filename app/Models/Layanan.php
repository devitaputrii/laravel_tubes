<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tema',
        'sub_tema',
        'img1',
        'img2',
        'judul',
        'deskripsi',
    ];
    use SoftDeletes;

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
