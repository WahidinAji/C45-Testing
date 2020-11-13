<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class C45 extends Model
{
    protected $table = 'c45s';
    protected $fillable = ['outlook', 'windy', 'humidity', 'play'];
    public $timestamps = \true;
}
