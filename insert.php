<?php
$servername = "127.0.0.1";
$username = "root";
$password = ""; 
$dbname = "db_film";
$namatabel = "film"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

$judul_Film = "Agak Laen";
$pemeran = "Indra Jegel";
$tahun_tayang = 2024;


$sql = "INSERT INTO $film (judul, pemeran, tahun_tayang)
        VALUES ('$judul', '$penulis_buku', $tahun_tayang)";

echo "<h1>Menjalankan Fitur Tambah Data...</h1>";
if ($conn->query($sql) === TRUE) {
    echo "<p>Data baru berhasil ditambahkan ke tabel '$film'!</p>";
} else {
    echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
}

$conn->close();
?>
