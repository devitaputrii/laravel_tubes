<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;

class LayananController extends Controller
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
        // Validate the request data
        $request->validate([
            'Tema' => 'required|string',
            'SubTema' => 'required|string',
            'Gambar1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust as needed
            'Gambar2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust as needed
            'Icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust as needed
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Store the uploaded images and get their paths
        $gambar1Path = $request->file('Gambar1')->store('layanan_images', 'public');
        $gambar2Path = $request->file('Gambar2')->store('layanan_images', 'public');
        $iconPath = $request->file('Icon')->store('layanan_images', 'public');

        // Create a new Layanan instance
        $layanan = new Layanan();
        $layanan->tema = $request->input('Tema');
        $layanan->sub_tema = $request->input('SubTema');
        $layanan->img1 = $gambar1Path;
        $layanan->img2 = $gambar2Path;
        $layanan->img_icon = $iconPath;
        $layanan->judul = $request->input('editJudul');
        $layanan->deskripsi = $request->input('editDeskripsi');

        // Save the Layanan instance
        $layanan->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Layanan added successfully');
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

    public function updateTema(Request $request)
    {
        // Validate the request data if needed
        $request->validate([
            'tema' => 'required|string',
            'sub_tema' => 'required|string',
        ]);

        // Get the new values from the request
        $newTema = $request->input('tema');
        $newSubTema = $request->input('sub_tema');

        // Update all records in the 'tema' and 'sub_tema' columns
        Layanan::query()->update(['tema' => $newTema, 'sub_tema' => $newSubTema]);

        // Redirect back or return a response
        return redirect()->back()->with('success', 'All records updated successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data if needed
        $request->validate([
            'Gambar1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Gambar2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Icon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Find the layanan by ID
        $layanan = Layanan::findOrFail($id);

        // Handle file uploads if provided
        if ($request->hasFile('Gambar1')) {
            $gambar1Path = $request->file('Gambar1')->store('layanan_images', 'public');
            $layanan->img1 = $gambar1Path;
        }

        if ($request->hasFile('Gambar2')) {
            $gambar2Path = $request->file('Gambar2')->store('layanan_images', 'public');
            $layanan->img2 = $gambar2Path;
        }

        if ($request->hasFile('Icon')) {
            $iconPath = $request->file('Icon')->store('layanan_icons', 'public');
            $layanan->img_icon = $iconPath;
        }

        // Update layanan data
        $layanan->judul = $request->input('editJudul');
        $layanan->deskripsi = $request->input('editDeskripsi');

        // Save the changes
        $layanan->save();

        // Redirect back or return a response
        return redirect()->back()->with('success', 'Layanan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function softDelete($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }
}
