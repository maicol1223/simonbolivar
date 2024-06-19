<?php

namespace App\Http\Controllers;


use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier=Supplier::all();
        return view("suppliers\index",compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("suppliers\create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->cell_number = $request->cell_number;
        $supplier->street_address = $request->street_address;
        
        $supplier->save();
        return redirect()->route('supplier.index')->with('success','El registro se agregó exitosamente');
     
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
        $supplier= Supplier::find($id);
        return view("suppliers.edit",compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->cell_number = $request->cell_number;
        $supplier->street_address = $request->street_address;
        
        $supplier->save();
        return redirect()->route('supplier.index')->with('success','El registro se actualizó exitosamente');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier ->delete();
        return redirect()->route('supplier.index')->with('success','ok');
    }
}
