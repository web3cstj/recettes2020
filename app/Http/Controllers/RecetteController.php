<?php

namespace App\Http\Controllers;

use App\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for ($i = 0; $i < 10; $i += 1) {
        //     $recettes[] = Recette::fake();
        // }
        $recettes = Recette::all();
        return view("recette.index", ['recettes' => $recettes]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function show(Recette $recette)
    {
        // $recette = Recette::fake();
        // $recette = Recette::find($id);
        // dd($recette);
        $recette->ingredients = json_decode($recette->ingredients);
        $recette->instructions = json_decode($recette->instructions);
        return view("recette.show", ['recette' => $recette]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function edit(Recette $recette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recette $recette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recette $recette)
    {
        //
    }
}
