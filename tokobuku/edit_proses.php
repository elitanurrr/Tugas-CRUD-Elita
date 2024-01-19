<?php
include 'koneksi.php';

$ID_Buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];

// Add other fields as needed

$query = "UPDATE tb_product SET Kategori='$Kategori' WHERE ID_Buku='$ID_Buku'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<h2>Data berhasil diedit!</h2>";
    echo "<p>Kembali ke <a href='index.php'>halaman utama</a>.</p>";
} else {
    echo "<h2>Gagal mengedit data.</h2>";
    echo "<p>Kembali ke <a href='admin.php'>halaman admin</a>.</p>";
}

mysqli_close($koneksi);
?>
