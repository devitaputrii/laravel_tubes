<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data if needed
        $request->validate([
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            'editHp' => 'required|numeric',
            'editAlamat' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Find the Kontak record by ID
        $kontak = Kontak::find($id);

        // Update Kontak data
        $kontak->judul = $request->input('editJudul');
        $kontak->deskripsi = $request->input('editDeskripsi');
        $kontak->no_hp = $request->input('editHp');
        $kontak->alamat = $request->input('editAlamat');

        // Save the updated Kontak record
        $kontak->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Kontak updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
