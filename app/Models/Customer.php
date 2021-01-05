<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'firstname',
        'phone',
        'email'
    ];

    public function Tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
