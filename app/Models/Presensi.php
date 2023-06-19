<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{

    protected $fillable = [
        'nama','tanggal', 'jamPresensi', 'jenisPresensi'
    ];

    public function setJenisPresensi($value){
        $this->attributes['jenisPresensi'] = json_encode($value);
    }

    public function getJenisPresensi($value)
    {
        return $this->attributes['jenisPresensi'] = json_decode($value);
    }

    protected $hidden = [

    ];
}
