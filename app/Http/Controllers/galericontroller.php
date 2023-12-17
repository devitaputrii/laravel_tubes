<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class galericontroller extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function create(){
        return view('galeri.create');
    }
    public function store(StoregaleriRequest $request)
    {
        $this->validate($request);
    }

    public function show(StoregaleriRequest $request)
    {
        //
    }
    public function edit(galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategaleriRequest $request, galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galeri $galeri)
    {
        //
    }
}

