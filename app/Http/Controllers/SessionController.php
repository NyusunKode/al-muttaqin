<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SessionController extends Controller
{
    // public function generateQr(Request $request)
    // {
    //     try {
    //         $response = Http::post(env('URL_WA_SERVER') . '/sessions/add', [
    //             'sessionId' => $request->sessionId,
    //         ]);

    //         if ($response->successful()) {
    //             $qrData = $response->json('qr');
    //             return redirect()->route('akun')->with('qrData', $qrData);
    //         } else {
    //             return back()->withErrors(['message' => 'Gagal menghasilkan kode QR.']);
    //         }
    //     } catch (\Exception $e) {
    //         return back()->withErrors([,.'message' => 'Terjadi kesalahan.']);
    //     }
    // }
}
