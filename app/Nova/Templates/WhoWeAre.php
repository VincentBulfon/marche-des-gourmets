<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaPage\Pages\Template;

class WhoWeAre extends Template
{
    use HasFlexible;

    public function getFlexibleContentAttribute()
    {
        return $this->flexible('');
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
            Flexible::make('À propos du rotary', 'aboutUs')->addLayout('Blocs de texte concernant le rotary', 'about', [
                Markdown::make('Bloc de texte', 'content')->rules('required'),
            ])->button('Ajouter un bloc de texte')->rules('required'),
            Text::make('Lien vers le site du rotary de flémalle', 'rotaryLink'),
            Flexible::make('Nos actions', 'actions')->addLayout('Une action menée par le ratary', 'actions', [
                Trix::make('Action menée', 'action')->rules('required'),
            ])->button('Ajouter une action')
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
