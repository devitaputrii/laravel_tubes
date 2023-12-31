<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\DaftarHarga;
use App\Models\Kontak;
use App\Models\Komplain;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class KomplainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $uniques = DaftarHarga::distinct()->pluck('kelompok');
        $kontaks = Kontak::get();
        $komplains = Komplain::get();

        return view('page.keluhan', compact('uniques', 'kontaks', 'komplains'));
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
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email|max:255',
            'Nota' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Keluhan' => 'required|string',
        ]);

        // Handle file upload
        $notaPesananPath = $request->file('Nota')->store('nota_pesanans', 'public');

        // Create a new Komplain instance
        $komplain = new Komplain();
        $komplain->nama = $request->Nama;
        $komplain->email = $request->Email;
        $komplain->img_nota = $notaPesananPath;
        $komplain->deskripsi = $request->Keluhan;

        // Save the Komplain
        $komplain->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Komplain added successfully');
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
        // Find the Komplain by ID
        $komplain = Komplain::findOrFail($id);

        // Toggle the status
        $komplain->status = ($komplain->status == 'Selesai') ? 'Komplain' : 'Selesai';

        // Save the changes
        $komplain->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Status updated successfully');
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
        $komplain = Komplain::findOrFail($id);
        $komplain->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'Komplain soft deleted successfully');
    }
}
