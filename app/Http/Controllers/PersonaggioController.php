<?php

namespace App\Http\Controllers;

use App\Models\personaggio;
use App\Http\Requests\StorepersonaggioRequest;
use App\Http\Requests\UpdatepersonaggioRequest;

class PersonaggioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorepersonaggioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepersonaggioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personaggio  $personaggio
     * @return \Illuminate\Http\Response
     */
    public function show(personaggio $personaggio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personaggio  $personaggio
     * @return \Illuminate\Http\Response
     */
    public function edit(personaggio $personaggio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepersonaggioRequest  $request
     * @param  \App\Models\personaggio  $personaggio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepersonaggioRequest $request, personaggio $personaggio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personaggio  $personaggio
     * @return \Illuminate\Http\Response
     */
    public function destroy(personaggio $personaggio)
    {
        //
    }
}
