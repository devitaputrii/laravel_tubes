<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
//import Model "Post
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
use Illuminate\Http\RedirectResponse;
=======
use Illuminate\Http\Request;
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
<<<<<<< HEAD
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
=======
    public function __construct()
    {
        $this->middleware('auth');
    }
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
<<<<<<< HEAD
    public function index(): View
    {
        $homes = Home::get(); 
        $prosess = Proses::get(); 
        $layanans = Layanan::get();
        $kontaks = Kontak::get();
        $tentang_kamis = TentangKami::get();
        $uniqueUserIds = Ulasan::where('rating', 5)->pluck('user_id')->unique();

        $ulasans = collect();
        foreach ($uniqueUserIds as $userId) {
            $ulasan = Ulasan::where('user_id', $userId)->where('rating', 5)->with('user')->first();
            if ($ulasan) {
                $ulasans->push($ulasan);
        
                // Stop collecting after reaching three records
                if ($ulasans->count() >= 3) {
                    break;
                }
            }
        }
        $uniques = DaftarHarga::distinct()->pluck('kelompok');

        return view('page.home', compact('homes', 'prosess', 'layanans', 'kontaks', 'tentang_kamis', 'ulasans', 'uniques'));
    }

    /**
     * Update banner data.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'editFoto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // adjust as needed
            'editJudul' => 'required|string|max:255',
            'editDeskripsi' => 'required|string',
            // Add other validation rules as needed
        ]);

        // Find the home data by ID
        $home = Home::findOrFail($id);

        // Update home data
        $home->judul = $request->input('editJudul');
        $home->deskirpsi = $request->input('editDeskripsi');

        // Check if a new banner is provided
        if ($request->hasFile('editFoto')) {
            // Delete the old banner if it exists
            if ($home->foto && Storage::exists($home->foto)) {
                Storage::delete($home->foto);
            }

            // Save the new banner
            $imagePath = $request->file('editFoto')->store('home_banners', 'public'); // adjust folder and disk as needed
            $home->foto = $imagePath;
        }

        // Save the changes
        $home->save();

        // Redirect back or to a specific page
        return redirect()->back()->with('success', 'Banner updated successfully');
=======
    public function index()
    {
        return view('home');
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b
    }
}
