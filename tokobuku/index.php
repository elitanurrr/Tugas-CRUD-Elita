<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku Ellie</title>
    <style>
        body {
            background-color: #ffd9eb; 
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
        }

        fieldset {
            width: 90%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #ff80ab; 
            color: #fff;
        }

        legend {
            font-size: 24px;
            color: #000; 
            margin-bottom: 20px;
        }

        h1 {
            color: #ff80ab; 
        }

        a {
            color: #800080; 
            text-decoration: none;
            margin: 0 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #ff80ab; 
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #ff3385; 
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Toko Elita Nur Ilahi</legend>
            
            <div class="menu-container">
                <a class="menu-link" href="index.php">Home</a>
                <a class="menu-link" href="admin.php">Admin</a>
                <a class="menu-link" href="pengadaan.php">Pengadaan</a>
            </div>
        <h1>Pencarian Produk</h1>
       
        <br>
        <form method="GET" action="index.php" style="text-align: center;">
            <label for="kata_cari">Kata Pencarian : </label>
            <input type="text" name="kata_cari" value="<?php echo isset($_GET['kata_cari']) ? htmlspecialchars($_GET['kata_cari']) : ''; ?>" />
            <button type="submit">Cari</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Kategori</th>
                    <th>Nama Buku</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Penerbit</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php
                
                include 'koneksi.php';
                
                if (isset($_GET['kata_cari'])) {
                    
                    $kata_cari = $_GET['kata_cari'];
                    $query = "SELECT * FROM tb_product WHERE ID_Buku like '%$kata_cari%' OR
                        Nama_Buku like '%$kata_cari%' ORDER BY ID_Buku ASC";
                } else {
                    
                    $query = "SELECT * FROM tb_product ORDER BY ID_Buku ASC";
                }

                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error : " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                }

                
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['ID_Buku']; ?></td>
                        <td><?php echo $row['Kategori']; ?></td>
                        <td><?php echo $row['Nama_Buku']; ?></td>
                        <td><?php echo $row['Harga']; ?></td>
                        <td><?php echo $row['Stok']; ?></td>
                        <td><?php echo $row['Penerbit']; ?></td>
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </fieldset>
</body>
</html>
