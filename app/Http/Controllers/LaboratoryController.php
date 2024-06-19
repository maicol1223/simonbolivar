<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laboratory=Laboratory::all();
        return view("laboratories\index",compact('laboratory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("laboratories\create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $laboratory = new Laboratory();
        $laboratory->name = $request->name;
        
        
        $laboratory->save();
        return redirect()->route('laboratory.index')->with('success','El registro se agrego exitosamente');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laboratory= Laboratory::find($id);
        return view("laboratories.edit",compact('laboratory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laboratory = Laboratory::find($id);
        $laboratory->name = $request->name;
        
        $laboratory->save();
        return redirect()->route('laboratory.index')->with('success','El registro se actualizó exitosamente');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laboratory $laboratory)
    {
        $laboratory ->delete();
        return redirect()->route('laboratory.index')->with('eliminar','ok');
    }
}
