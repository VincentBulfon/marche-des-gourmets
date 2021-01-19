<?php

namespace App\Nova;

use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\DateTime as FieldsDateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;

class Years extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Years::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'year';

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Editions';

    public static function label()
    {
        return 'Édition';
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Images::make('Images', 'year-pictures')->withResponsiveImages()->singleImageRules('max:2000')->rules('required')->help('Le poids par image ne peut pas excéder 2mo.'),
            FieldsDateTime::make('Année', 'year')->format('yyyy')->sortable()->rules('required')->help('Seule l\'édition avec la date la plus récente est affichée'),
            Markdown::make('Écriver un texte definissant les dates', 'date')->hideFromIndex()->rules('required')->hideFromIndex(),
            Text::make('Entrez lieu de l\'évenement', 'location')->sortable()->rules('required'),
            Text::make('Entrez le nombre de personnes ayant participé', 'populartiy')->default(0)->sortable()->rules('required'),
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

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
