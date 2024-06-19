<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AsignarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::all();
        return view("user\listUser\index",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user\listUser\create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
       
 
        $user->save();

        return redirect()->route('usuario.index')->with('success','El registro se guardó exitosamente');
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
        $user = User::find($id);

        $role = Role::all();
        return view("user.listUser.edit",compact('user','role'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->roles()->sync($request->roles);
        return redirect()->route('usuario.edit',$user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user ->delete();
        return redirect()->route('usuario.index')->with('eliminar','ok');
    }
}
