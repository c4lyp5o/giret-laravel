<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youngadult extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'ic_num',
        'tel_no',
        'the_sex',
        'consent',
        'complaint',
        'mh',
        'dh',
        'sh',
        'ohpb',
      ];
}
