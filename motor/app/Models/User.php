<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
        'status_pendaftaran',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    
    public function isAdmin()
{
    return $this->role === 'admin'; // Sesuaikan nilai role untuk admin
}

}