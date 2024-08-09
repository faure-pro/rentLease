<?php

namespace App\Http\Controllers;

use App\Models\Appartement;
use Illuminate\Http\Request;

class AppartementController extends Controller
{

    public function index()
    {
        $appartements= Appartement::all();
        return view('appartements.index')->with(['appartements' => $appartements]);
    }

    public function create(Appartement $appartement)
    {
        return view('appartements.create')->with('appartement', $appartement);
    }

    public function store(Request $request)
    {
        
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $appartement= Appartement::find($id);
        $appartement->delete();
        return to_route('appartements.index')->with('status','appartement supprimee avec succes!'); 
    }
}
