<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use App\Http\Requests\StoreulasanRequest;
use App\Http\Requests\UpdateulasanRequest;

class UlasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ulasan.ulasan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ulasan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreulasanRequest $request)
    {
        $data = $request->all();
        // ddd($data);
        ulasan::create([
            'nama'=>$data['nama'],
            'alamat'=>$data['alamat'],
            'ulasan'=>$data['ulasan'],
        ]);

        return redirect(route('ulasan.ulasan'));
        // $ulasan = ulasan::all(); 
        return view('ulasan.ulasan', compact('ulasan'));

    }

    /**
     * Display the specified resource.
     */
    public function show(ulasan $ulasan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ulasan $ulasan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateulasanRequest $request, ulasan $ulasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ulasan $ulasan)
    {
        //
    }
}
