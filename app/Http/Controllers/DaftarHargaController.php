<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\DaftarHarga;
use App\Models\Kontak;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarHargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //get posts
        $services = DaftarHarga::get();
        $uniques = DaftarHarga::distinct()->pluck('kelompok');
        $kontaks = Kontak::get();

        //render view with posts
        return view('page.daftar_harga', compact('services', 'uniques', 'kontaks'));
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
    public function store(Request $request, $kelompok)
    {
        // Validate the request
        $request->validate([
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'editNama' => 'required|string',
            'editMinimal' => 'required|numeric',
            'editEstimasi' => 'required|numeric',
            'editHarga' => 'required|numeric',
        ]);

        // Create a new DaftarHarga instance
        $daftarHarga = new DaftarHarga;

        // Handle image upload if a new image is provided
        if ($request->hasFile('editFoto')) {
            // Upload the new image
            $imagePath = $request->file('editFoto')->store('daftar_harga_images', 'public');
            $daftarHarga->img = $imagePath;
        }

        // Assign other fields
        $daftarHarga->kelompok = $kelompok;
        $daftarHarga->name = $request->input('editNama');
        $daftarHarga->minimal = $request->input('editMinimal');
        $daftarHarga->estimasi = $request->input('editEstimasi');
        $daftarHarga->harga = $request->input('editHarga');

        // Save the new DaftarHarga record
        $daftarHarga->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data added successfully');
    }

    public function storeKelompok(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Judul' => 'required|string',
        ]);

        // Create a new Kelompok instance
        $kelompok = new DaftarHarga([
            'kelompok' => $request->input('Judul'),
            // Add other fields as needed
        ]);

        // Save the Kelompok instance to the database
        $kelompok->save();

        // Redirect or perform any other actions as needed
        return redirect()->back()->with('success', 'User soft deleted successfully');
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
        // Validate the request
        $request->validate([
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // adjust the validation rules for the image file
            'editNama' => 'required|string',
            'editMinimal' => 'required|numeric',
            'editEstimasi' => 'required|numeric',
            'editHarga' => 'required|numeric',
        ]);

        // Find the record by ID
        $service = DaftarHarga::findOrFail($id);

        // Handle image upload if a new image is provided
        if ($request->hasFile('editFoto')) {
            // Delete the old image if needed
            // Use Storage facade to delete the old file from the storage
            Storage::delete($service->img);

            // Upload the new image
            $imagePath = $request->file('editFoto')->store('daftar_harga_images', 'public');

            // Update the record with the new image path
            $service->img = $imagePath;
        }

        // Update other fields
        $service->name = $request->input('editNama');
        $service->minimal = $request->input('editMinimal');
        $service->estimasi = $request->input('editEstimasi');
        $service->harga = $request->input('editHarga');

        // Save the changes
        $service->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function updateKelompok(Request $request, $kelompok)
    {
        // Validate the request
        $request->validate([
            'Kelompok' => 'required|string|max:255',
            // Add other validation rules as needed
        ]);

        // Update all records with the specified kelompok
        DaftarHarga::where('kelompok', $kelompok)->update([
            'kelompok' => $request->input('Kelompok'),
            // Update other fields as needed
        ]);

        // Redirect or respond as needed
        return redirect()->back()->with('success', 'Kelompok updated successfully');
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
        $daftar_harga = DaftarHarga::findOrFail($id);
        $daftar_harga->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }

    public function softDeleteKelompok($kelompok)
    {
        DaftarHarga::where('kelompok', $kelompok)->delete();

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }
}
