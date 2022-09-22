<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FilmResource::collection(Film::all());
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
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Film $film)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string|max:225',
            'godina' => 'required|string|max:100',                            
            'zanr_id' => 'required',
            'reziser_id' => 'required',
            'opis' => 'required|string|max:255',    
        ]);

        if ($validator->fails())
            return response()->json($validator->errors());

        $film->naziv = $request->naziv;
        $film->opis = $request->opis;
        $film->godina = $request->godina;
        $film->reziser_id = $request->reziser_id;
        $film->zanr_id = $request->zanr_id;

        $film->save();

        return response()->json(['Film je uspesno sacuvan.', new FilmResource($film)]);
         // 'naziv','godina','zanr_id','reziser_id','opis'
    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        //
    }
}
