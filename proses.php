<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SkyBook - Konfirmasi</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>

<div class="row">
    <?php
include "koneksi.php";

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];
$tiket  = $_POST['jumlah_tiket'];

$query = "INSERT INTO pemesanan 
(nama, email, tujuan, tanggal, jumlah_tiket)
VALUES ('$nama', '$email', '$tujuan', '$tanggal', '$tiket')";

$hasil = mysqli_query($koneksi, $query);
?>
<?php
if ($hasil) {
    echo "<h2>Pemesanan Berhasil ✈️</h2>";
    echo "<p>Terima kasih <b>$nama</b></p>";
    echo "<p>Tujuan: <b>$tujuan</b></p>";
    echo "<p>Tanggal: <b>$tanggal</b></p>";
    echo "<p>Jumlah Tiket: <b>$tiket</b></p>";
} else {
    echo "<h2 style='color:red;'>Pemesanan Gagal</h2>";
    echo "<p>" . mysqli_error($koneksi) . "</p>";
}
?>
<div class="tombol">
<br>
<a href="index.html">
    <button>Kembali ke Beranda</button>
</a>
</div>
</div>

</body>
</html>
