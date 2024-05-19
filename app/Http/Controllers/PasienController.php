<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pasiens = Pasien::all();
        return view('pasiens.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pasiens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pasiens',
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required'
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Pasien created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
        return view('pasiens.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        //
        return view('pasiens.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
        $request->validate([
            'nik' => 'required|unique:pasiens,nik,' . $pasien->id,
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required'
        ]);

        $pasien->update($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Pasien updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        //
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Pasien deleted successfully.');
    }
}
