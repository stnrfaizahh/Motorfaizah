<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'alamat', 'nomor_telepon', 'tanggal_lahir', 'foto_profil',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}