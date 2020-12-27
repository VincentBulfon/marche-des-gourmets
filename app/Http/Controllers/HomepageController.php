<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Whitecube\NovaPage\Pages\Manager;
use Whitecube\NovaPage\Pages\Template;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Template $template, Manager $novapage)
    {
        $intro = $novapage->load('home');

        return view('homepage', compact('intro'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homepage      $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homepage      $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homepage      $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homepage      $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        //
    }
}
