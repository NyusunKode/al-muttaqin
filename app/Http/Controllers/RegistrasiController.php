<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegistrasiController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'nama_ortu' => 'required|string',
            'nama_anak' => 'required|string',
            'nomor_wa' => 'required|numeric',
        ]);

        try {
            Registrasi::create([
                'nama_ortu' => $request->nama_ortu,
                'nama_anak' => $request->nama_anak,
                'nomor_wa' => $request->nomor_wa,
                'status' => array_search('terdaftar', Registrasi::getStatusOptions())
            ]);
        } catch (\Exception $e) {
            Log::error('Error register:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('ERROR', 'Gagal melakukan pendaftaran.');
        }
        return redirect()->back()->with('SUCCESS', 'Data anda berhasil didaftarkan.');
    }

    public function acceptRegistration($id)
    {
        $registration = Registrasi::findOrFail($id);

        try {
            $formatted_nomor_wa = $registration->nomor_wa;

            if (substr($formatted_nomor_wa, 0, 2) === '08') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            } elseif (substr($formatted_nomor_wa, 0, 1) === '0') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            }

            $registration->status = array_search('diterima', Registrasi::getStatusOptions());
            $registration->save();

            $client = new Client();
            $response = $client->post(env('URL_WA_SERVER') . '/john/messages/send', [
                'json' => [
                    'jid' => $formatted_nomor_wa . '@s.whatsapp.net',
                    'type' => 'number',
                    'message' => [
                        'image' => ['url' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1644309716/hogdkkpwy5mlftetyo9l.jpg'],
                        'caption' => 'Ini paki dan ngetes BOT. Terimakasih 😉'
                    ]
                ]
            ]);

            if ($response->getStatusCode() != 200) {
                Log::error('Error sending WhatsApp message:', ['response' => $response->getBody()->getContents()]);
                return redirect()->back()->with('ERROR', 'Pendaftaran berhasil, tetapi gagal mengirim pesan WhatsApp.');
            }
        } catch (\Exception $e) {
            Log::error('Error register:', ['error' => $e->getMessage()]);
            return redirect()->back()->with('ERROR', 'Gagal melakukan konfirmasi.');
        }

        return redirect()->back()->with('SUCCESS', 'Pendaftaran berhasil diterima.');
    }
}
