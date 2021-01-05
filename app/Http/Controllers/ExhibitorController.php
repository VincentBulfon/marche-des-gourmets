<?php

namespace App\Http\Controllers;

use App\Events\ExhibitorAdded;
use App\Http\Requests\StoreExhibitorRequest;
use App\Models\Exhibitor;
use App\Models\Region;
use App\Models\Tag;
use Illuminate\Http\Request;

class ExhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('tag', 'asc')->get(['id', 'tag'])->toArray();
        $countries = Region::all(['id', 'country', 'region'])->groupBy('country')->toArray();

        return view(
            'exhibitors',
            [
                'rq' => request()->query(),
                'tags' => $tags,
                'countries' => $countries
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExhibitorRequest $request)
    {
        $validatedData = $request->validated();
        $exhibitor = new Exhibitor;
        $exhibitor->company_name = $validatedData['company_name'];
        $exhibitor->link = $validatedData['company_link'];
        $exhibitor->firstname = $validatedData['firstname'];
        $exhibitor->lastname = $validatedData['name'];
        $exhibitor->email = $validatedData['email'];
        $exhibitor->phone = $validatedData['phone'];
        $exhibitor->about = $validatedData['about'];
        //set up the region relationship to the model
        if (Region::where('country', $validatedData['country'])->where('region', $validatedData['region'])->exists()) {
            $region = Region::where('country', $validatedData['country'])->where('region', $validatedData['region'])->get();
            $exhibitor->region()->associate($region->first()->id);
        } else {
            $region = new Region;
            $region->country = $validatedData['country'];
            $region->region = $validatedData['region'];
            $region->save();
            $exhibitor->region()->associate($region->id);
        }
        //set up the is_bio on model
        if ($request->input('bio')) {
            $exhibitor->is_bio = true;
        }
        //save exhibitor
        $exhibitor->save();

        // set up tags on relationship
        if ($request->input('tags')) {
            foreach ($request->input('tags') as $k => $tagId) {
                $exhibitor->tags()->attach($tagId);
            }
        }
        ExhibitorAdded::dispatch($exhibitor);
        $request->session()->flash('status', 'Votre enregistrement est réussi! Vos données seront traitées dans la jours qui viennes. Un email de conformation vous à été envoyé.');

        return redirect('/exposants#became');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exhibitor     $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function show(exhibitor $exhibitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exhibitor     $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function edit(exhibitor $exhibitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\exhibitor     $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exhibitor $exhibitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exhibitor     $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(exhibitor $exhibitor)
    {
        //
    }
}
