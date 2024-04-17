<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRiderRequest;
use App\Http\Requests\UpdateRiderRequest;
use App\Models\Rider;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id'
        );
        return view('riders.index', ['riders' => $riders]);
    }

    public function italy()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "Italy"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function aus()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "Australia"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function fra()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "France"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function jap()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "Japan"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function por()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "Portugal"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function sa()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "South Africa"');
        return view('riders.index', ['riders' => $riders]);
    }
    public function sp()
    {
        $riders = DB::select(
        'SELECT riders.id, riders.fname, riders.lname, riders.team, riders.nationality, manufacturers.manufacturer_name, riders.imageURL
        FROM riders 
        JOIN manufacturers  ON riders.manufacturer_id = manufacturers.id
        WHERE riders.nationality = "Spain"');
        return view('riders.index', ['riders' => $riders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('riders.create', ['manufacturers' => Manufacturer::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRiderRequest $request)
    {
        Rider::create($request->validated());

        Session::flash('success', 'Rider added successfully');
        return redirect()->route('riders.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rider $rider)
    {
        return view('riders.show', compact('rider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rider $rider)
    {
        $manufacturers = Manufacturer::all();
        return view('riders.edit', compact('rider', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRiderRequest $request, Rider $rider)
    {
        $rider->update($request->validated());
        return redirect()->route('riders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function trash($id)
    {
        Rider::destroy($id);
        Session::Flash('success', 'Rider trashed successfully'); 
        return redirect()->route('riders.index');
    }

    public function destroy(Rider $rider, $id)
    {
        $rider = Rider::withTrashed()->where('id', $id)->first();
        $rider->forceDelete();
        Session::Flash('success', 'Rider deleted successfully');
        return redirect()->route('riders.index');
    }
}
