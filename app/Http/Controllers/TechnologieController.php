<?php

namespace App\Http\Controllers;

use App\Models\technologie;
use App\Http\Requests\StoretechnologieRequest;
use App\Http\Requests\UpdatetechnologieRequest;

class TechnologieController extends Controller
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
     * @param  \App\Http\Requests\StoretechnologieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretechnologieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function show(technologie $technologie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function edit(technologie $technologie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetechnologieRequest  $request
     * @param  \App\Models\technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetechnologieRequest $request, technologie $technologie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\technologie  $technologie
     * @return \Illuminate\Http\Response
     */
    public function destroy(technologie $technologie)
    {
        //
    }
}
