<?php

namespace App\Http\Controllers;

use App\Models\razze;
use App\Http\Requests\StorerazzeRequest;
use App\Http\Requests\UpdaterazzeRequest;

class RazzeController extends Controller
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
     * @param  \App\Http\Requests\StorerazzeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorerazzeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\razze  $razze
     * @return \Illuminate\Http\Response
     */
    public function show(razze $razze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\razze  $razze
     * @return \Illuminate\Http\Response
     */
    public function edit(razze $razze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdaterazzeRequest  $request
     * @param  \App\Models\razze  $razze
     * @return \Illuminate\Http\Response
     */
    public function update(UpdaterazzeRequest $request, razze $razze)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\razze  $razze
     * @return \Illuminate\Http\Response
     */
    public function destroy(razze $razze)
    {
        //
    }
}
