<?php

namespace App\Http\Controllers;


use App\Http\Requests\BatimentRequest;
use App\Models\Batiment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BatimentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batiments= Batiment::all();
        return view('batiments.index')->with(['batiments' => $batiments]);
    }

    public function create(Batiment $batiment)
    {
        return view('batiments.create')->with('batiment', $batiment);
    }

    public function store(BatimentRequest $request)
    {   
        $batiment = Batiment::query()->create([
            'nom' => $request->nom,
            'ville' => $request->ville,
            'description' => $request->description,
            'user_id' => 1,
        ]);
        return to_route('batiments.index', $batiment);
    }

    public function show(Batiment $batiment)
    {
        return view('batiments.show', compact('batiment'));
    }

    public function edit(Batiment $batiment)
    {
        return view('batiments.edit')->with('batiment', $batiment) ;
    }

    public function update(BatimentRequest $request, string $id)
    {   
        $request->validate([
            'nom' => ['required','unique:batiments','max:255'],
             'ville' => ['required','unique:batiments','max:255'],
            'description' => ['required','max:255'],
         ]);

        $batiment = Batiment::findOrFail($id);
        $batiment->update($request->all());
        
        return to_route('batiments.index', $batiment);
    }

    public function destroy(string $id)
    {
        $batiment= Batiment::find($id);
        $batiment->delete();
        return to_route('batiments.index')->with('status','batiment supprimee avec succes!'); 
    }
}
