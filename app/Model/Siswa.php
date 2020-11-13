<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nama', 'gender', 'nilai_ipa', 'nilai_ips', 'usbn_ipa', 'usbn_ips', 'rekomendasi', 'minat', 'status_kelas'];
    public $timestamps = \true;
}
