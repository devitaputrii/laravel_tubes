<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
<<<<<<< HEAD
use App\Models\DaftarHarga;
use App\Models\Kontak;
=======
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
<<<<<<< HEAD

    public function showLinkRequestForm()
    {
        $uniques = DaftarHarga::distinct()->pluck('kelompok');
        $kontaks = Kontak::get();

        return view('auth.passwords.email', compact('uniques', 'kontaks'));
    }
=======
>>>>>>> 5b41fb7b0812f434c9a8249eda3e900ab1524d3b
}
