<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Years extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $casts = [
        'year' => 'datetime:Y-m-d',
    ];
    protected $table = 'years';

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
        ->width(130)
        ->height(130);

        $this->addMediaConversion('medium')
        ->width(500)
        ->height(500);
    }

    public function registerMediaCollections(): void
    {
        $this
        ->addMediaCollection('year-pictures');
    }
}
