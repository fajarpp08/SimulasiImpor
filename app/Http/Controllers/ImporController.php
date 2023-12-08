<?php

namespace App\Http\Controllers;

use App\Models\Impor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ImporController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $data['records'] = $impor->items();

        // return $this->success($data,'get records data success');
        //
        return view('impor.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('impor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kodeBarang = $request->input('kode_barang');
        $nilaiKomoditas = $request->input('nilai_komoditas');

        // API Kode Barang
        $responseBarang = Http::get('https://insw-dev.ilcs.co.id/my/n/barang', [
            'hs_code' => $kodeBarang
        ]);

        $uraianBarang = $responseBarang->json();

        // API Biaya Impor
        $responseTarif = Http::get('https://insw-dev.ilcs.co.id/my/n/tarif', [
            'hs_code' => $kodeBarang
        ]);

        $tarifBm = $responseTarif['bm'];

        // Hitung nilai_bm
        $nilaiBm = $nilaiKomoditas * $tarifBm / 100;

        // Simpan data ke database
        $simulasi = new Impor();
        $simulasi->id_simulasi = Uuid::uuid4()->toString();
        $simulasi->kode_barang = $kodeBarang;
        $simulasi->uraian_barang = $uraianBarang;
        $simulasi->bm = $tarifBm;
        $simulasi->nilai_komoditas = $nilaiKomoditas;
        $simulasi->nilai_bm = $nilaiBm;
        $simulasi->save();

        return response()->json([
            'message' => 'Biaya impor berhasil disimpan',
            'data' => $simulasi
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
