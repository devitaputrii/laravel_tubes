<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komplain extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'img_nota',
        'status',
        'deskripsi',
    ];

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
