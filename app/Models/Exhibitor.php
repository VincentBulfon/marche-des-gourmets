<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    use HasFactory;

    protected $casts = ['is_draf' => 'boolean'];
    protected $with = ['region', 'tags'];

    /**
     * Relation between exhibitors and tags
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'exhibitor_tags');
    }

    /**
     * Relation between exhibitors and regions
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id', 'id');
    }
}
