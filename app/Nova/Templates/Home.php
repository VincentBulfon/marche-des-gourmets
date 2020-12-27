<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaPage\Pages\Template;

class Home extends Template
{
    use HasFlexible;

    public function getFlexibleContentAttribute()
    {
        return $this->flexible('intro');
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            Flexible::make('intro')
            ->addLayout('Paragraphe d\'introduction au maché des gourmets', 'Paragraphe', [
                Trix::make('Contenu')
            ])->button('Ajouter un pragraphe')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }
}
