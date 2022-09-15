<?php

namespace App\Http\Controllers;

use App\Http\Resources\PaintingResource;
use App\Models\Painting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paintings = Painting::all();
        return $paintings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paintings = Painting::all();
        return $paintings;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'artist_id' => 'required',
            'art_period_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }


        $painting = Painting::create([
            'artist_id' => $request->artist_id,
            'art_period_id' => $request->art_period_id,
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year
        ]);
        return response()->json(['The painting has been successfully stored!', new PaintingResource($painting)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function show(Painting $paintingID) // prosledi id
    {
        $painting = Painting::find($paintingID);
        if (is_null($painting)) {
            return response()->json(['A painting with that ID does not exist!']);
        }
        return response()->json($painting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function edit(Painting $painting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */

    //Painting
    // 'artist_id',
    // 'art_period_id',
    // 'title',
    // 'description',
    // 'year'

    public function update(Request $request, Painting $painting)
    {
        $validator = Validator::make($request->all(), [
            'artist_id' => 'required',
            'art_period_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $painting->artist_id = $request->artist_id;
        $painting->art_period_id = $request->art_period_id;
        $painting->title = $request->title;
        $painting->description = $request->description;
        $painting->year = $request->year;

        $painting->save();
        return response()->json(['The painting has been successfully updated!', new PaintingResource($painting)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Painting  $painting
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $paintingID) // prosledi id
    {
        $painting = Painting::find($paintingID);
        if (is_null($painting)) {
            return response()->json(['A painting with that ID does not exist!']);
        }
        $painting->delete();
        return response()->json(['The painting has been successfully deleted!']);
    }
}
