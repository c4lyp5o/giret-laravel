<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KPAS extends Model
{
    use HasFactory;
    public $table="kpas";

    protected $fillable = [
        'name',
        'address',
        'sex',
        'email',
      ];
}
