<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Galeri;
use App\Models\DaftarHarga;
use App\Models\Kontak;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //get posts
        $posts = Galeri::latest()->get();
        $uniques = DaftarHarga::distinct()->pluck('kelompok');
        $kontaks = Kontak::get();

        //render view with posts
        return view('page.galeri', compact('posts', 'uniques', 'kontaks'));
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
        // Validate the form data
        $request->validate([
            'tambahGambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'Judul' => 'required|string',
            'Deskripsi' => 'required|string',
        ]);

        // Upload the image
        $imagePath = $request->file('tambahGambar')->store('galeris', 'public');

        // Create a new Galeri instance
        $galeri = new Galeri([
            'img' => $imagePath,
            'judul' => $request->input('Judul'),
            'deskripsi' => $request->input('Deskripsi'),
        ]);

        // Save the Galeri instance to the database
        $galeri->save();

        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'Proses added successfully');
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
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'editJudul' => 'required|string',
            'editDeskripsi' => 'required|string',
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation as needed
        ]);

        // Find the Galeri by ID
        $galeri = Galeri::findOrFail($id);

        // Update Galeri data
        $galeri->judul = $request->input('editJudul');
        $galeri->deskripsi = $request->input('editDeskripsi');

        // Handle the photo upload if a new photo is provided
        if ($request->hasFile('editFoto')) {
            // Delete the old photo, if exists
            if ($galeri->img) {
                // Adjust the path based on your storage configuration
                Storage::delete('galeris' . $galeri->img);
            }

            // Store the new photo
            $fotoPath = $request->file('editFoto')->store('galeris', 'public');

            // Save the photo path to the Galeri model
            $galeri->img = $fotoPath;
        }

        // Save the changes
        $galeri->save();

        // Redirect back or return a response
        return redirect()->back()->with('success', 'Galeri updated successfully');
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
        $galeri = Galeri::findOrFail($id);
        $galeri->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }
}
