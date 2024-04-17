<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreManufacturerRequest;
use App\Http\Requests\UpdateManufacturerRequest;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manufacturers = DB::select(
            'SELECT manufacturers.id, manufacturers.imageURL, manufacturers.manufacturer_name
            FROM manufacturers'
        );
        return view('manufacturers.index', ['manufacturers' => $manufacturers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreManufacturerRequest $request)
    {
        Manufacturer::create($request->validated());

        Session::flash('success', 'Manufacturer added successfully');
        return redirect()->route('manufacturers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacturer $manufacturer)
    {
        return view('manufacturers.show', compact('manufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturers.edit', compact('manufacturer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->validated());
        return redirect()->route('manufacturers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Manufacturer::destroy($id);
        Session::Flash('success', 'Manufacturer trashed successfully'); 
        return redirect()->route('manufacturers.index');
    }

    public function destroy(Manufacturer $manufacturer, $id)
    {
        $manufacturer = Manufacturer::withTrashed()->where('id', $id)->first();
        $manufacturer->forceDelete();
        Session::Flash('success', 'Manufacturer deleted successfully');
        return redirect()->route('manufacturers.index');    
    }
}
