<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegistrasiController extends Controller
{
    public function register(Request $request) {
        $request->validate([
            'nama_ortu' => 'required|string',
            'nama_anak' => 'required|string',
            'nomor_wa' => 'required|numeric',
            'status' => 'required|string',
        ]);

        try {
            Registrasi::create([
                'nama_ortu' => $request->nama_ortu,
                'nama_anak' => $request->nama_anak,
                'nomor_wa' => $request->nomor_wa,
                'status' => array_search('terdaftar', Registrasi::getStatusOptions())
            ]);
        } catch (\Exception $e) {
            Log::error('Error creating template:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('ERROR', 'Gagal melakukan pendaftaran.');
        }
        return redirect()->back()->with('SUCCESS', 'Pendaftaran berhasil diterima.');
    }

    public function acceptRegsitration() {

    }
}
