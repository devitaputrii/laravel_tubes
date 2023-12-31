<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TentangKami;

class TentangKamiController extends Controller
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
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the validation rule for the image file
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Find the TentangKami record by ID
        $tentangKami = TentangKami::find($id);

        // Update TentangKami data
        if ($request->hasFile('editFoto')) {
            // Upload the new image file
            $imagePath = $request->file('editFoto')->store('tentang_kami_images', 'public');

            // Delete the old image file if it exists
            if ($tentangKami->gambar) {
                Storage::disk('public')->delete($tentangKami->img);
            }

            // Save the new image path to the database
            $tentangKami->img = $imagePath;
        }

        $tentangKami->judul = $request->input('editJudul');
        $tentangKami->deskripsi = $request->input('editDeskripsi');

        // Save the updated TentangKami record
        $tentangKami->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Tentang Kami updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
