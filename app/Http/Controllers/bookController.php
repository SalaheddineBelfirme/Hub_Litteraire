<?php

namespace App\Http\Controllers;


use \App\Models\book;

use Illuminate\Http\Request;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return book::all();
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameBook'=>'required',
            'image'=>'required',
            'content'=>'required',
            'category_id'=>'required',

        ]);
     return book::create($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return book::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $prodct=  book::find($id); 
         $prodct ->update($request->all());
         return $prodct;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         return book::destroy($id);   
    }
}
