<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<body>
    <h2>TambahData</h2>
    <form action="tambah.php" method="POST">
            <div>
                <label for="judul">Judul Film</label>
                <input type="text" id="judul" name="judul" placeholder="Contoh: AADC" required>
            </div>
            <div>
                <label for="penulis">Nama Pemeran:</label>
                <input type="text" id="pemeran" name="pemeran" placeholder="Contoh: Iqbal Ramadhan" required>
            </div>
            <div>
                <label for="tahun">Tahun Tayang:</label>
                <input type="number" id="tahun" name="tahun_tayang" min="1800" max="2099" placeholder="Contoh: 2025" required>
            </div>
            <div>
                <button type="submit">Simpan Film</button>
            </div>
        </form>
</body>
</html>