<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'phone_number',
        'address',
        'date_of_birth',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setpasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    // }

    public function tours()
    {
        return $this->belongsToMany(Tour::class);
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function likes()
    {
        return $this->belongsToMany(LikeReview::class);
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function reivews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function ratings()
    {
        return $this->belongsToMany(Rating::class);
    }

    public function scopeGetByRole($query, $role) 
    {
        return $query->where('role', $role);
    }

    public function getJWTIdentifier() {
        return $this->getKey();
    }

    public function getJWTCustomClaims() {
        return [];
    }  
}
