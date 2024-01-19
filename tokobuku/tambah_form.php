<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Buku</title>
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
        <legend align="center">Form Tambah Data Buku</legend>
        <form action="tambah_proses.php" method="post">
            <label for="ID_Buku">ID Buku:</label>
            <input type="text" name="ID_Buku" required>

            <label for="Kategori">Kategori:</label>
            <input type="text" name="Kategori" required>

            <label for="Nama_Buku">Nama Buku:</label>
            <input type="text" name="Nama_Buku" required>

            <label for="Harga">Harga:</label>
            <input type="text" name="Harga" required>

            <label for="Stok">Stok:</label>
            <input type="text" name="Stok" required>

            <label for="Penerbit">Penerbit:</label>
            <input type="text" name="Penerbit" required>

            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </fieldset>
</body>
</html>
