<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prest extends Model
{
    protected $table = "prest";
    protected $casts = [
        'sevicos' => 'array'
    ];
    use HasFactory;
}
