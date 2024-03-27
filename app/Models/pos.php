<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pos extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'jenis_pos', 'foto', 'utm_x', 'utm_y', 'koordinat_ls', 'koordinat_bt', 'das', 'no_registrasi', 'desa', 'kecamatan', 'kabupaten'];
}
