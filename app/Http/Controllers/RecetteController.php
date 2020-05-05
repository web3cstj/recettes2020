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
        // $recette = new Recette();
        $recette = Recette::fake(); // Pour les paresseux
        return view("recette.create", ['recette' => $recette]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('annuler')) {
            return redirect()->action("RecetteController@index");
        }
        $validatedData = $request->validate(Recette::$rules);

        $recette = new Recette();
        $donnees = $request->all();
        // $donnees->ingredients = $this->ingredients;
        // $donnees->instructions = $this->instructions;
        $recette->fill($donnees);
        $recette->save();
        return redirect()->action("RecetteController@show", $recette);
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
        // $recette->ingredients = json_decode($recette->ingredients);
        // $recette->instructions = json_decode($recette->instructions);
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
        return view("recette.edit", ['recette' => $recette]);
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
        if ($request->has('annuler')) {
            return redirect()->action("RecetteController@show", $recette);
        }
        $donnees = $request->all();
        $recette->fill($donnees);
        $recette->save();
        return redirect()->action("RecetteController@show", $recette);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function delete(Recette $recette)
    {
        return view("recette.delete", ['recette' => $recette]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recette  $recette
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Recette $recette)
    {
        if ($request->has('annuler')) {
            return redirect()->action("RecetteController@show", $recette);
        }
        $recette->delete();
        return redirect()->action("RecetteController@index");
    }
}
