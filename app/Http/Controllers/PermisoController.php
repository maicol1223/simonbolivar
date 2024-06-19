<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos=Permission::all();
        return view("user\permisos\index",compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user\permisos\create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permission = Permission::create(['name' => $request->input ('name')]);
        return redirect()->route('permiso.index')->with('successMsg','El registro se actualizó exitosamente');
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
        $permisos= Permission::find($id);
        return view("user.permisos.edit",compact('permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permiso)
    {
        $permiso ->delete();
        return redirect()->route('permiso.index')->with('eliminar','ok');
    }
}
