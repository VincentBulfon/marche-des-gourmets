<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;
use Whitecube\NovaFlexibleContent\Flexible;
use Whitecube\NovaPage\Pages\Template;

class Infos extends Template
{
    use HasFlexible;

    public function getFlexibleContentAttribute()
    {
        return $this->flexible('openDates');
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
            Flexible::make('Dates', 'dates')->addLayout("Jour d'ouverture du marché  ", 'openDates', [
                DateTime::make('Date et heure de début de la journée', 'startingTime')->format('D-M-Y H:mm')->sortable()->resolveUsing(function ($value) {return $value;}),
                DateTime::make('Date et heure de fin de la journée', 'endingTime')->format('D-M-Y H:mm')->sortable()->resolveUsing(function ($value) {return $value;}),
            ])->button("Ajouter une date d'ouverture"),
            Text::make('Nom du lieu', 'placeName')->required(),
            Text::make('Adresse du lieu', 'placeAddress')->required(),
            Text::make('Lien Google maps vers le lieu', 'placeLink')->required(),
            Trix::make('informations sur le exposants', 'who')->required(),
            Trix::make('Information sur le prix', 'price')->required(),
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
