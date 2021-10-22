<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personne::all();
        return view('personnes.index', compact('personnes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personnes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'integer|required',
            'filiere' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',


        ]);
        $personne = new Personne();
        $personne->name = $request->name;
        $personne->age = $request->age;
        $personne->filiere = $request->filiere;
        $personne->image = $request->file('image')->store('personnes');
        $personne->save();
        flashy()->success('Votre identité a été bien sauvegardée');
        return back()->with('success', 'Votre identité a été bien enregistrée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnes = Personne::findOrFail($id);
        return view('personnes.edit', compact('personnes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required'
        ]);
        $personne = Personne::findOrFail($id);
        $personne->name = $request->name;
        $personne->age = $request->age;
        $personne->save();
        flashy()->success('L' / ' identité de la personne a été modifiée avec succès');
        return redirect()->route('all-personnes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Personne::destroy($id)) {
            flashy()->success('La personne a été supprimée');
        } else {
            flashy()->error('La personne n' / ' a pas été supprimée');
        }
        return back();
    }
}
