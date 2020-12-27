<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class Homepage extends Model
{
    use HasFactory;
    use HasFlexible;

    public function getFlexibleContentAttribute()
    {
        return $this->flexible('intro');
    }
}
