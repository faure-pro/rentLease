<?php

namespace App\Http\Controllers;

use App\Models\Etage;
use Illuminate\Http\Request;

class EtageController extends Controller
{
  
    public function index()
    {
        $etage= Etage::all();
        return view('etages.index')->with(['etages' => $etage]);
    }
    public function create()
    {
        return view('etages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => [ 'required','unique:etages' ],
            'nombreAppartements' => [ 'required','unique:etages' ],
            'description' => ['required','unique:etages'],
        ]);
        $etage = Etage::query()->create([
            'numero' => $request->numero,
            'nombreAppartements' => $request->nombreAppartements,
            'description' => $request->description,
            'batiment_id' => 1,
        ]);
        return to_route('etages.index', $etage);
    }
   
    public function show(Etage $etage)
    {
        return view('etages.show', compact('etage'));
    }

    public function edit(Etage $etage)
    {
        return view('etages.edit')->with('etage', $etage) ;
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => ['required','max:255'],
            'description' => ['required'],
        ]);
        $etage = Etage::findOrFail($id);
        $etage->update($request->all());
        
        return to_route('etages.index');
    }

    public function destroy(string $id)
    {
        $etage= Etage::find($id);
        $etage->delete();
        return to_route('etages.index')->with('status','etage supprimee avec succes!'); 
    }
}
