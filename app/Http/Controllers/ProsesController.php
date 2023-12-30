<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proses;

class ProsesController extends Controller
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
            'editFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Adjust validation rules as needed
            'Judul' => 'required|string',
            'Tema' => 'required|string',
            'SubTema' => 'required|string',
            'Deskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Handle the file upload
        $iconPath = $request->file('editFoto')->store('proses_icons', 'public');

        // Create a new Proses instance
        $proses = new Proses();
        $proses->icon = $iconPath;
        $proses->tema = $request->input('Tema');
        $proses->sub_tema = $request->input('SubTema');
        $proses->judul = $request->input('Judul');
        $proses->deskripsi = $request->input('Deskripsi');

        // Save the new Proses instance
        $proses->save();

        // Redirect back or to a specific page
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
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // adjust as needed
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Find the process by ID
        $proses = Proses::findOrFail($id);

        // Update process data
        $proses->judul = $request->input('editJudul');
        $proses->deskripsi = $request->input('editDeskripsi');

        // Check if a new icon is provided
        if ($request->hasFile('editFoto')) {
            $iconPath = $request->file('editFoto')->store('proses_icons', 'public'); // adjust folder and disk as needed
            $proses->icon = $iconPath;
        }

        // Save the changes
        $proses->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Process updated successfully');
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
        Proses::query()->update(['tema' => $newTema, 'sub_tema' => $newSubTema]);

        // Redirect back or return a response
        return redirect()->back()->with('success', 'All records updated successfully');
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
        $proses = Proses::findOrFail($id);
        $proses->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }
}
