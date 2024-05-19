<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apotek;

class apotekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apoteks = Apotek::all();
        return view('apoteks.index', compact('apoteks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apoteks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kode' => 'required|unique:apoteks',
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required'
        ]);

        Apotek::create($request->all());
        return redirect()->route('apoteks.index')->with('success', 'Apotek created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Apotek $apotek)
    {
        //
        return view('apoteks.show', compact('apotek'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apotek $apotek)
    {
        //
        return view('apoteks.edit', compact('apotek'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Apotek $apotek)
    {
        //
        $request->validate([
            'kode' => 'required|unique:apoteks,kode,' . $apotek->id,
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required'
        ]);

        $apotek->update($request->all());
        return redirect()->route('apoteks.index')->with('success', 'Apotek updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apotek $apotek)
    {
        //
        $apotek->delete();
        return redirect()->route('apoteks.index')->with('success', 'Apotek deleted successfully.');
    }
}
