<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Toko Buku Ellie</title>
    <style>
        body {
            background-color: #ffe6f2; /* Soft Pink Background */
            color: #800080; /* Warna Ungu */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        fieldset {
            width: 50%; /* Lebar 50% agar tidak penuh layar */
            margin: auto;
            background-color: #fff; /* Warna Putih */
            padding: 20px;
            border: 1px solid #800080; /* Warna Ungu */
            border-radius: 10px; /* Sudut melengkung */
            margin-top: 50px; /* Jarak dari atas */
        }

        h2 {
            color: #800080; /* Warna Ungu */
        }

        p {
            margin-top: 20px;
        }

        a {
            color: #800080; /* Warna Ungu */
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
include 'koneksi.php';


$ID_Buku = $_POST['ID_Buku'];
$Kategori = $_POST['Kategori'];
$Nama_Buku = $_POST['Nama_Buku'];
$Harga = $_POST['Harga'];
$Stok = $_POST['Stok'];
$Penerbit = $_POST['Penerbit'];


$query = "INSERT INTO tb_product (ID_Buku, Kategori, Nama_Buku, Harga, Stok, Penerbit) VALUES ('$ID_Buku', '$Kategori', '$Nama_Buku', '$Harga', '$Stok', '$Penerbit')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    
    echo "<h2>Data berhasil diedit!</h2>";
    echo "<p>Kembali ke <a href='index.php'>halaman utama</a>.</p>";
} else {
    
    echo "<h2>Gagal mengedit data.</h2>";
    echo "<p>Kembali ke <a href='tambah_form.html'>halaman tambah data</a>.</p>";
}


mysqli_close($koneksi);
?>
   
</body>
</html>
