<?php

namespace App\Http\Controllers;

use App\Models\Registrasi;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegistrasiController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'no_telp' => 'required|numeric',
            'nama_lengkap_anak' => 'required|string',
            'nama_panggilan_anak' => 'required|string',
            'nik' => 'required|numeric',
            'jenis_kelamin' => 'required|string',
            'anak_ke' => 'required|numeric',
            'agama' => 'required|string',
            'pendidikan_anak' => 'required|string',
            'alamat_anak' => 'required|string',
            'pekerjaan_ortu' => 'required|string',
            'pendidikan_ortu' => 'required|string',
            'alamat_ortu' => 'required|string',
        ]);

        $ttl_anak = null;
        if ($request->has('tempat_lahir_anak') && $request->has('tanggal_lahir_anak')) {
            $formattedDateAnak = Carbon::createFromFormat('Y-m-d', $request->tanggal_lahir_anak)->format('d F Y');
            $ttl_anak = $request->tempat_lahir_anak . ', ' . $formattedDateAnak;
        }

        $ttl_ortu = null;
        if ($request->has('tempat_lahir_ortu') && $request->has('tanggal_lahir_ortu')) {
            $formattedDateOrtu = Carbon::createFromFormat('Y-m-d', $request->tanggal_lahir_ortu)->format('d F Y');
            $ttl_ortu = $request->tempat_lahir_ortu . ', ' . $formattedDateOrtu;
        }

        if (Registrasi::where('nik', $request->nik)->exists()) {
            return redirect()->back()->with('ERROR', 'NIK sudah terdaftar. Pendaftaran ditolak.');
        }

        try {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->no_telp = $request->no_telp;
            $user->save();

            Registrasi::create([
                'id_user' => $user->id,
                'nama_lengkap_anak' => $request->nama_lengkap_anak,
                'nama_panggilan_anak' => $request->nama_panggilan_anak,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jenis_kelamin,
                'ttl_anak' => $ttl_anak,
                'anak_ke' => $request->anak_ke,
                'agama' => $request->agama,
                'pendidikan_anak' => $request->pendidikan_anak,
                'alamat_anak' => $request->alamat_anak,
                'ttl_ortu' => $ttl_ortu,
                'pekerjaan_ortu' => $request->pekerjaan_ortu,
                'pendidikan_ortu' => $request->pendidikan_ortu,
                'alamat_ortu' => $request->alamat_ortu,
                'status' => array_search('false', Registrasi::getStatusOptions())
            ]);

            $formatted_nomor_wa = $user->no_telp;

            if (substr($formatted_nomor_wa, 0, 2) === '08') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            } elseif (substr($formatted_nomor_wa, 0, 1) === '0') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            }

            $client = new Client();
            $response = $client->post(env('URL_WA_SERVER') . '/john/messages/send', [
                'json' => [
                    'jid' => $formatted_nomor_wa . '@s.whatsapp.net',
                    'type' => 'number',
                    'message' => [
                        'image' => ['url' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1644309716/hogdkkpwy5mlftetyo9l.jpg'],
                        'caption' => 'Pendaftaran telah berhasil dilakukan! Harap tunggu admin menerima dan mengkonfirmasi pendaftaran anda. Terimakasih 😉'
                    ]
                ]
            ]);

            if ($response->getStatusCode() != 200) {
                Log::error('Error sending WhatsApp message:', ['response' => $response->getBody()->getContents()]);
                return redirect()->back()->with('ERROR', 'Pendaftaran berhasil, tetapi gagal mengirim pesan WhatsApp.');
            }
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
            $formatted_nomor_wa = $registration->user->no_telp;

            if (substr($formatted_nomor_wa, 0, 2) === '08') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            } elseif (substr($formatted_nomor_wa, 0, 1) === '0') {
                $formatted_nomor_wa = '62' . substr($formatted_nomor_wa, 1);
            }

            $registration->status = array_search('true', Registrasi::getStatusOptions());
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
