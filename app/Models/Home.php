<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Home extends Model
{
    use HasFactory;
    protected $fillable = [
        'img_banner',
        'judul',
        'deskirpsi',
    ];

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
