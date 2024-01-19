<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data - Toko Buku Ellie</title>
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

// menyimpan data id kedalam variabel
$id = $_GET['id'];

// query SQL untuk delete data
$query = "DELETE FROM tb_penerbit WHERE ID_Penerbit='$id'";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo "<h2>Data berhasil dihapus!</h2>";
} else {
    echo "<h2>Gagal menghapus data.</h2>";
}

// Kembalikan ke halaman index.php setelah menghapus data
echo "<p>Kembali ke <a href='pengadaan.php'>pengadaan</a>.</p>";

mysqli_close($koneksi);
?>
   
</body>
</html>
