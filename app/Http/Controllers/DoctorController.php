<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required|unique:doctors',
            'nama' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required'
        ]);

        Doctor::create($request->all());
        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
        $request->validate([
            'nik' => 'required|unique:doctors,nik,' . $doctor->id,
            'nama' => 'required',
            'alamat' => 'required',
            'spesialis' => 'required'
        ]);

        $doctor->update($request->all());
        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully.');
    }
}
