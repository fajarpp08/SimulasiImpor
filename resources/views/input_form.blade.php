<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
</head>
<body>
    <h1>Input Form</h1>

    <form action="{{ route('simulasi') }}" method="POST">
        @csrf
        <label for="kode_barang">Kode Barang (8 Character):</label>
        <input type="text" name="kode_barang" required maxlength="8">
        
        <label for="nilai_komoditas">Nilai Komoditas:</label>
        <input type="text" name="nilai_komoditas" required>

        <button type="submit">Simulasi</button>
    </form>
</body>
</html>