<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'img',
    ];
    use SoftDeletes;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function daftarhargas(){
        return $this->hasMany('App\Models\DaftarHarga'); 
    }

    public function galeris(){
        return $this->hasMany('App\Models\Galeri'); 
    }

    public function homes(){
        return $this->hasOne('App\Models\Home'); 
    }

    public function kontaks(){
        return $this->hasOne('App\Models\Kontak'); 
    }

    public function layanans(){
        return $this->hasMany('App\Models\Layanan'); 
    }

    public function proses(){
        return $this->hasMany('App\Models\Proses'); 
    }

    public function ulasans(){
        return $this->hasMany('App\Models\Ulasan'); 
    }

    public function tentangkamis(){
        return $this->hasOne('App\Models\TentangKami'); 
    }
}
