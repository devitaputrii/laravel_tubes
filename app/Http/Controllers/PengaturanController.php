<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\User;
use App\Models\Home;
use App\Models\Proses;
use App\Models\Layanan;
use App\Models\Kontak;
use App\Models\TentangKami;
use App\Models\Ulasan;
use App\Models\DaftarHarga;

//return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get posts
        $tables = ['User', 'Home', 'Kontak', 'Proses', 'Layanan', 'Daftar Harga', 'Tentang Kami', 'Galeri'];
        $users = User::where('role', '<>', 'admin')->get();
        $homes = Home::get(); 
        $prosess = Proses::get(); 
        $prosess_uniques = Proses::select('tema', 'sub_tema')->distinct()->get();
        $layanans = Layanan::get();
        $prosess_layanans = Layanan::select('tema', 'sub_tema')->distinct()->get();
        $kontaks = Kontak::get();
        $tentang_kamis = TentangKami::get();
        $ulasan = Ulasan::get();
        $daftar_harga = DaftarHarga::get();
        $uniques = DaftarHarga::distinct()->pluck('kelompok');

        //render view with posts
        return view('page.pengaturan', compact('users', 'tables', 'homes', 'prosess', 'prosess_uniques', 'layanans', 'prosess_layanans', 'kontaks', 'tentang_kamis', 'ulasan', 'daftar_harga', 'uniques'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
