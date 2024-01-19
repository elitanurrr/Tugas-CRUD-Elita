<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Buku</title>
    <style>
        body {
            background-color: #ffc0cb;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        fieldset {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #800080;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend align="center">Edit Data Buku</legend>
        <?php
        include "koneksi.php";
        // Menggunakan prepared statement untuk menghindari SQL Injection
        $id = (int)$_GET['id'];
        $query = "SELECT * FROM tb_product WHERE ID_Buku=?";
        $stmt = mysqli_prepare($koneksi, $query);
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        if (!$row) {
            echo "Data tidak ditemukan. Kembali ke <a href='admin.php'>halaman admin</a>.";
            exit;
            }
        
        ?>
        <form action="edit_buku.php" method="post">
            <input type="hidden" name="ID_Buku" value="<?php echo $row['ID_Buku']; ?>">

            <label for="Kategori">Kategori:</label>
            <input type="text" name="Kategori" value="<?php echo $row['Kategori']; ?>" required>

            <label for="Nama_Buku">Nama Buku:</label>
            <input type="text" name="Nama_Buku" value="<?php echo $row['Nama_Buku']; ?>" required>

            <label for="Harga">Harga:</label>
            <input type="text" name="Harga" value="<?php echo $row['Harga']; ?>" required>

            <label for="Stok">Stok:</label>
            <input type="text" name="Stok" value="<?php echo $row['Stok']; ?>" required>

            <label for="Penerbit">Penerbit:</label>
            <input type="text" name="Penerbit" value="<?php echo $row['Penerbit']; ?>" required>

            <button type="submit" name="submit">Simpan Perubahan</button>
        </form>
    </fieldset>
</body>
</html>
