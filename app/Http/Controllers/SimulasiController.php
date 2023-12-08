<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Simulasi;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SimulasiController extends Controller
{
    public function inputForm()
    {
        return view('input_form'); // Buat view input_form.blade.php untuk menampilkan form input
    }

    public function simulasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_barang' => 'required|string|size:8',
            'nilai_komoditas' => 'required|numeric',
        ]);

        // Panggil API Uraian Barang
        $uraianResponse = Http::get('https://insw-dev.ilcs.co.id/my/n/barang', [
            'hs_code' => $request->kode_barang,
        ]);

        // Panggil API Tarif Biaya Impor
        $tarifResponse = Http::get('https://insw-dev.ilcs.co.id/my/n/tarif', [
            'hs_code' => $request->kode_barang,
        ]);

        // Ambil data dari respons API
        $uraianBarang = $uraianResponse->json('uraian_barang');
        $bmTarif = $tarifResponse->json('bm');

        // Hitung nilai BM
        $nilaiBM = ($request->nilai_komoditas * $bmTarif) / 100;

        // Simpan data ke database
        $simulasi = new Simulasi([
            'id_simulasi' => Str::uuid(),
            'kode_barang' => $request->kode_barang,
            'uraian_barang' => $uraianBarang,
            'bm' => $bmTarif,
            'nilai_komoditas' => $request->nilai_komoditas,
            'nilai_bm' => $nilaiBM,
        ]);
        $simulasi->save();

        // Redirect atau tampilkan hasil ke halaman lain
        return redirect()->route('hasil_simulasi', ['id_simulasi' => $simulasi->id_simulasi]);
    }

    public function hasilSimulasi($id_simulasi)
    {
        // Ambil data simulasi dari database
        $simulasi = Simulasi::where('id_simulasi', $id_simulasi)->first();

        // Tampilkan hasil ke view
        return view('hasil_simulasi', compact('simulasi')); // Buat view hasil_simulasi.blade.php untuk menampilkan hasil
    }
}
