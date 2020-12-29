<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;

    protected $casts = [
        'startingTime' => 'datetime:Y-m-d H:i',
        'endingTime' => 'datetime:Y-m-d-h H:i'
    ];
}
