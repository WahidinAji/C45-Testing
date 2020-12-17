<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = ['kks', 'mtk', 'b_indo', 'b_inggris', 'mapel_produktif', 'penghasilan_ortu', 'beasiswa'];
    public $timestamps = \true;
}
