<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class hospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hospitals = hospital::all();
        return view('hospitals.index', compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('hospitals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required|unique:hospitals',
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'pemilik' => 'required',
            'kelas' => 'required'
        ]);

        Hospital::create($request->all());
        return redirect()->route('hospitals.index')->with('success', 'Hospital created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(hospital $hospital)
    {
        //
        return view('hospitals.show', compact('hospital'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hospital $hospital)
    {
        //
        return view('hospitals.edit', compact('hospital'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hospital $hospital)
    {
        //
        $request->validate([
            'kode' => 'required|unique:hospitals,kode,' . $hospital->id,
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'pemilik' => 'required',
            'kelas' => 'required'
        ]);

        $hospital->update($request->all());
        return redirect()->route('hospitals.index')->with('success', 'Hospital updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hospital $hospital)
    {
        //
        $hospital->delete();
        return redirect()->route('hospitals.index')->with('success', 'Hospital deleted successfully.');
    }
}
