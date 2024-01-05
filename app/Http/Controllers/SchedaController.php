<?php

namespace App\Http\Controllers;

use App\Models\scheda;
use App\Http\Requests\StoreschedaRequest;
use App\Http\Requests\UpdateschedaRequest;

class SchedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carattristiche = array('Forza', 'Destrezza', 'Costituzione', 'Intelligenza', 'Saggezza', 'Carisma');
        return view('livewire/scheda', ['staz' => $carattristiche]);
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
     * @param  \App\Http\Requests\StoreschedaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreschedaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\scheda  $scheda
     * @return \Illuminate\Http\Response
     */
    public function show(scheda $scheda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\scheda  $scheda
     * @return \Illuminate\Http\Response
     */
    public function edit(scheda $scheda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateschedaRequest  $request
     * @param  \App\Models\scheda  $scheda
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateschedaRequest $request, scheda $scheda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\scheda  $scheda
     * @return \Illuminate\Http\Response
     */
    public function destroy(scheda $scheda)
    {
        //
    }
}
