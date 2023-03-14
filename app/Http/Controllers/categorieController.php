<?php

namespace App\Http\Controllers;
use \App\Models\categorie;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return categorie::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'NameCetgory'=>'required'
        ]);
     return categorie::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return categorie::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $category=categorie::find($id);
        $category->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return categorie::destroy($id);  
       }
}
