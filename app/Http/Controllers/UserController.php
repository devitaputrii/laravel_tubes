<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
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
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // adjust as needed
            'editName' => 'required|string|max:255',
            'editEmail' => 'required|email|unique:users,email,' . $id,
            // Add other validation rules as needed
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update user data
        $user->name = $request->input('editName');
        $user->email = $request->input('editEmail');

        // Check if a new photo is provided
        if ($request->hasFile('editFoto')) {
            $imagePath = $request->file('editFoto')->store('/foto_user', 'public'); // adjust folder and disk as needed
            $user->img = $imagePath;
        }

        // Save the changes
        $user->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'User updated successfully');
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
        $user = User::findOrFail($id);
        $user->delete(); // This will set the 'deleted_at' timestamp

        return redirect()->back()->with('success', 'User soft deleted successfully');
    }
}
