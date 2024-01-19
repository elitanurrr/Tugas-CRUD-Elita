<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengadaan - Toko Buku Ellie</title>
    <style>
        body {
            background-color: #ffc0cb; 
            color: #800080; 
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        fieldset {
            width: 80%; 
            margin: auto;
            background-color: #fff; 
            padding: 20px;
            border: 1px solid #800080; 
            border-radius: 10px; 
        }

        table {
            border-collapse: collapse;
            margin: auto;
            width: 100%;
        }

        th, td {
            border: 1px solid #800080; 
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #ffb6c1; 
        }

        a {
            color: #800080; 
            text-decoration: none;
            margin: 0 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        h1 {
            color: #800080; 
        }

        .menu-container {
            margin-bottom: 20px;
        }

        .menu-link {
            color: #ff80ab; 
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        .menu-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <fieldset>
        
        <legend align="center">Pengadaan - Toko Buku Ellie</legend>

        
        <div class="menu-container">
            <a class="menu-link" href="index.php">Home</a>
            <a class="menu-link" href="admin.php">Admin</a>
            <a class="menu-link" href="pengadaan.php">Pengadaan</a>
        </div>
        <br><br>
        <center>||<a href="tambah_penerbit_form.html">Tambah Data</a>||</center>
        <br>
        <h1>Data Penerbit</h1>

        <?php
        include 'koneksi.php';

        
        $query = "SELECT * FROM tb_penerbit";
        $result = mysqli_query($koneksi, $query);

        if (!$result) {
            die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
        }
        ?>

       
        <table border="1">
            <thead>
                <tr>
                    <th>ID Penerbit</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Telepon</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>{$row['ID_Penerbit']}</td>";
                    echo "<td>{$row['Nama']}</td>";
                    echo "<td>{$row['Alamat']}</td>";
                    echo "<td>{$row['Kota']}</td>";
                    echo "<td>{$row['Telepon']}</td>";
                    echo "<td>
                            <a href='edit_form.php?id={$row['ID_Penerbit']}'>EDIT</a>
                            <a href='delete2.php?id={$row['ID_Penerbit']}'>HAPUS</a>
                          </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <?php
        
        mysqli_free_result($result);

        
        mysqli_close($koneksi);
        ?>
    </fieldset>
</body>
</html>
