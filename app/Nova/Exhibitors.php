<?php

namespace App\Nova;

use App\Models\Exhibitor;
use Benjacho\BelongsToManyField\BelongsToManyField;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;

class Exhibitors extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Exhibitor::class;

    /**
     * The logical group associated with the resource.
     *
     * @var string
     */
    public static $group = 'Exposants';

    public static function label()
    {
        return 'Exposant';
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'company_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'company_name',
        'tags'
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
            Boolean::make('Validé', 'validated')
            ->sortable()
            ->rules('required', 'boolean'),
            Text::make('Nom de la société', 'company_name')
                ->sortable()
                ->rules('required', 'max:255'),
            Text::make('Prénom', 'firstname')->rules('required', 'max:255'),
            Text::make('Nom', 'lastname')->rules('required', 'max:255'),
            Text::make('Email', 'email')->rules('required', 'max:255', 'email'),
            Text::make('A propos', 'about')->rules('required', 'max:255')->hideFromIndex(),
            Boolean::make('Est bio', 'is_bio')->rules('required', 'boolean'),
            Text::make('Lien vers le site/page facebook', 'link')->rules('url')->hideFromIndex(),
            BelongsToManyField::make('tags')->hideFromIndex(),
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
