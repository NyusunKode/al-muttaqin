<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use App\Http\Requests\StoreinformasiRequest;
use App\Http\Requests\UpdateinformasiRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InformasiController extends Controller
{
    public function addData(Request $request)
    {
        $request->validate([
            "judul"=>"required|string|max:255",
            "thumbnail"=>"required|image|mimes:png,jpg|max:2048",
            "isi"=>"required|string",
        ]);

        try {
            $filePaththumbnail = $request->file('thumbnail')->store('thumbnails', 'public');
            
            $directory = public_path('images/thumbnail');
            if (!File::isDirectory($directory)) {
                File::makeDirectory($directory, 0777, true, true);
            }
    
            informasi::create([
                'judul'=>$request['judul'],
                'thumbnail'=>$filePaththumbnail,
                'isi'=>$request['isi'],
            ]);
        } catch (\Exception $e) {
            return redirect('/informasi')->with('ERROR', 'Gagal membuat data');
        }

        return redirect('/informasi')->with('SUCCESS', 'Layanan berhasil ditambahkan.');
    }
}
