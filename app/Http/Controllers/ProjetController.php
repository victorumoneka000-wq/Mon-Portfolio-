<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Projet::create([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        return redirect('/projets');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projet $projet)
    {
        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projet $projet)
    {
        $projet->update([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        return redirect('/projets');
    }

    
 public function destroy($id)
{
    Projet::find($id)->delete();
    return redirect('/projets');

}
}