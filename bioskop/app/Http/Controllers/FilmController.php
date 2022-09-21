<?php

namespace App\Http\Controllers;

use App\Http\Resources\FilmResource;
use App\Models\Film;
use Illuminate\Http\Request;

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
    public function update(Request $request, $id)
    {
        $film=Film::find($id);
       
        if(isset($_POST["delete"])){
            $film->delete();
            
        }else{
           // 'naziv','godina','zanr_id','reziser_id','opis'
            if(isset($request->naziv)){
                $film->naziv=$request->naziv;
            }
            if(isset($request->godina)){
                $film->godina=$request->godina;
            }
            if(isset($request->zanr_id)){
                $film->zanr_id=$request->zanr_id;
            }
            if(isset($request->reziser_id)){
                $film->reziser_id=$request->reziser_id;
            }
            if(isset($request->opis)){
                $film->opis=$request->opis;
            }
            $film->save();
        }
        return response()->json([
            'Poruka: ' => 'Film je izmenjen!'
       ] );
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
