<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    /**
     * return the relation between tags en exhibitors
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function exhibitors()
    {
        return $this->belongsToMany(Exhibitor::class);
    }
}
