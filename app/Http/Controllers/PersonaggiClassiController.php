<?php

namespace App\Http\Controllers;

use App\Models\personaggi_classi;
use App\Http\Requests\Storepersonaggi_classiRequest;
use App\Http\Requests\Updatepersonaggi_classiRequest;

class PersonaggiClassiController extends Controller
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
     * @param  \App\Http\Requests\Storepersonaggi_classiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storepersonaggi_classiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personaggi_classi  $personaggi_classi
     * @return \Illuminate\Http\Response
     */
    public function show(personaggi_classi $personaggi_classi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personaggi_classi  $personaggi_classi
     * @return \Illuminate\Http\Response
     */
    public function edit(personaggi_classi $personaggi_classi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatepersonaggi_classiRequest  $request
     * @param  \App\Models\personaggi_classi  $personaggi_classi
     * @return \Illuminate\Http\Response
     */
    public function update(Updatepersonaggi_classiRequest $request, personaggi_classi $personaggi_classi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personaggi_classi  $personaggi_classi
     * @return \Illuminate\Http\Response
     */
    public function destroy(personaggi_classi $personaggi_classi)
    {
        //
    }
}
