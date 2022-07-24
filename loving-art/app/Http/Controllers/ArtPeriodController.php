<?php

namespace App\Http\Controllers;

use App\Http\Resources\ArtPeriodResource;
use App\Models\ArtPeriod;
use Illuminate\Http\Request;

class ArtPeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artPeriods = ArtPeriod::all();
        return $artPeriods;
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
     * @param  \App\Models\ArtPeriod  $artPeriod
     * @return \Illuminate\Http\Response
     */
    public function show(ArtPeriod $artPeriod)
    {
        return new ArtPeriodResource($artPeriod);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArtPeriod  $artPeriod
     * @return \Illuminate\Http\Response
     */
    public function edit(ArtPeriod $artPeriod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ArtPeriod  $artPeriod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArtPeriod $artPeriod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArtPeriod  $artPeriod
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArtPeriod $artPeriod)
    {
        //
    }
}
