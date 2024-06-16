<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function homePage()
    {
        $informasi = informasi::query()->get();

        return view('pages.home', compact('informasi'));
    }

    public function visiPage()
    {
        return view('pages.visi');
    }

    public function historiPage()
    {
        return view('pages.histori');
    }

    public function teacherPage()
    {
        return view('pages.teacher');
    }

    public function facilitiesPage()
    {
        return view('pages.facilities');
    }

    public function contactPage()
    {
        return view('pages.contact');
    }

    public function informationPage()
    {
        $user = Auth::user();
        $informasi = informasi::all();

        return view('pages.information', compact('user', 'informasi'));
    }

    public function registrationPage()
    {
        return view('pages.registration');
    }

    public function loginPage()
    {
        return view('pages.auth.login');
    }



    public function dashboardPage()
    {
        $user = Auth::user();
        $roles = $user->roles->pluck('name');
        $statusRegistration = Registrasi::where('id_user', $user->id)->first();

        $registration = Registrasi::query()->get();


        if (!Auth::check()) {
            return redirect('/login');
        }

        if ($roles->contains('ortu')) {
            if ($statusRegistration->status == array_search('false', Registrasi::getStatusOptions())) {
                Auth::logout();
                return redirect('/login')->with('ERROR', 'Pendaftaran belum dikonfirmasi oleh Admin.');
            } else {
                return view('pages.ortu.dashboard', compact('user', 'roles', 'registration'));
            }
        } else {
            return view('pages.admin.dashboard', compact('user', 'roles'));
        }
    }

    public function registrasiPage()
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        $registration = Registrasi::query()->get();

        return view('pages.admin.registrasi', compact('user', 'roles', 'registration'));
    }

    public function detailPage($id)
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        $registration = Registrasi::find($id);

        return view('pages.ortu.detail-registration', compact('user', 'roles', 'registration'));
    }

    public function informasiPage()
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');
        $informasi = informasi::all();

        return view('pages.admin.informasi', compact('user', 'roles', 'informasi'));
    }

    public function akunPage()
    {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        return view('pages.admin.akun', compact('user', 'roles'));
    }
}
