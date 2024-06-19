<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles=Role::all();
        return view("user\Roles\index",compact('roles'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user\Roles\create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->input('name')]);
        
        return redirect()->route('role.index')->with('éxito','El registro se agregó exitosamente');
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
        $role= Role ::find($id);
        $permisos = Permission::all();
        return view("user.Roles.edit",compact('role','permisos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $role->permissions()->sync($request->permisos);
        return redirect()->route('role.edit',$role);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role ->delete();
        return redirect()->route('role.index')->with('eliminar','ok');
    }
}
