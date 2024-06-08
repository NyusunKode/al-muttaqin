<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function homePage() {
        return view('pages.home');
    }

    public function visiPage() {
        return view('pages.visi');
    }

    public function historiPage() {
        return view('pages.histori');
    }

    public function teacherPage() {
        return view('pages.teacher');
    }

    public function registrationPage() {
        return view('pages.registration');
    }

    public function loginPage() {
        return view('pages.auth.login');
    }

    public function dashboardPage() {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        return view('pages.admin.dashboard', compact('user', 'roles'));
    }
    public function registrasiPage() {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        $registration = Registrasi::query()->get();

        return view('pages.admin.registrasi', compact('user', 'roles', 'registration'));
    }
    public function informasiPage() {

        $user = Auth::user();
        $roles = $user->roles->pluck('name');

        return view('pages.admin.informasi', compact('user', 'roles'));
    }
}
