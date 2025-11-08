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

$judul = $_POST['judul'];
$penulis = $_POST['pemeran'];
$tahun = $_POST['tahun_tayang'];

$sql = "INSERT INTO $namatabel (judul, pemeran, tahun_tayang) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssi", $judul, $penulis, $tahun);


echo "<div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>";
echo "<h1>Hasil Penambahan Data</h1>";
if ($stmt->execute()) {
    echo "<p style='color: green; font-size: 18px;'>Data baru berhasil ditambahkan!</p>";
} else {
    echo "<p style='color: red; font-size: 18px;'>Error: " . $stmt->error . "</p>";
}
echo "<a href='index.php'>Kembali ke Formulir</a>";
echo "</div>";


$stmt->close();
$conn->close();
?>