<?php
include 'koneksi.php';

$ID_Penerbit = $_POST['ID_Penerbit'];
$Nama = isset($_POST['Nama']) ? $_POST['Nama'] : '';
$Alamat = isset($_POST['Alamat']) ? $_POST['Alamat'] : '';
$Kota = isset($_POST['Kota']) ? $_POST['Kota'] : '';
$Telepon = isset($_POST['Telepon']) ? $_POST['Telepon'] : '';

$query = "INSERT INTO tb_penerbit (ID_Penerbit, Nama, Alamat, Kota, Telepon) 
          VALUES ('$ID_Penerbit', '$Nama', '$Alamat', '$Kota', '$Telepon')";

$result = mysqli_query($koneksi, $query);
?>


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
if ($result) {
    echo "<h2>Data berhasil ditambahkan!</h2>";
    echo "<p>Kembali ke <a href='pengadaan.php'>pengadaan</a>.</p>";
} else {
    echo "<h2>Gagal menambahkan data.</h2>";
    echo "<p>Kembali ke <a href='tambah_penerbit_form.html'>halaman tambah data</a>.</p>";
}

mysqli_close($koneksi);
?>

</body>
</html>
