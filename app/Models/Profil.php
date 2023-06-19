<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{

    protected $fillable = [
        'name', 'username', 'tanggalLahir', 'jenisKelamin', 'noHP', 'alamat', 'asalInstansi', 'periode', 'mentor', 'jurusan', 'semesterKelas', 'email_verified_at', 'id-user', 'password'
    ];

    protected $hidden = [

    ];
}
