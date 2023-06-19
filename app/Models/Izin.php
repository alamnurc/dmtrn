<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    protected $fillable = [
        'nama', 'user_id', 'tanggalMulai', 'jamMulai', 'tanggalSelesai', 'jamSelesai', 'keperluan', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $hidden = [

    ];
}
