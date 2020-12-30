<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * return the relation between regions en exhibitors
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function exhibitors()
    {
        return $this->hasMany(Region::class);
    }
}
