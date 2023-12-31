<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DaftarHarga extends Model
{
    use HasFactory;
    protected $fillable = [
        'kelompok',
        'name',
        'minimal',
        'estimasi',
        'harga',
    ];
    use SoftDeletes;

    public function users(){
    	return $this->belongsTo('App\Models\User');
    }
}
