<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Simulasi</title>
</head>
<body>
    <h1>Hasil Simulasi</h1>

    <p><strong>ID Simulasi:</strong> {{ $simulasi->id_simulasi }}</p>
    <p><strong>Kode Barang:</strong> {{ $simulasi->kode_barang }}</p>
    <p><strong>Uraian Barang:</strong> {{ $simulasi->uraian_barang }}</p>
    <p><strong>BM:</strong> {{ $simulasi->bm }}</p>
    <p><strong>Nilai Komoditas:</strong> {{ $simulasi->nilai_komoditas }}</p>
    <p><strong>Nilai BM:</strong> {{ $simulasi->nilai_bm }}</p>
    <p><strong>Waktu Insert:</strong> {{ $simulasi->created_at }}</p>
</body>
</html>