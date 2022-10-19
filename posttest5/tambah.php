<?php
require 'koneksi.php';

if (isset($_POST["tambah"])) {
    $nama = htmlspecialchars($_POST["nama"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $jumlah_halaman = htmlspecialchars($_POST["jumlah_halaman"]);
    $tanggal_rilis = htmlspecialchars($_POST["tanggal_rilis"]);
    $deskripsi = htmlspecialchars($_POST["deskripsi"]);

    $sql = "INSERT INTO request_komik VALUES ('', '$nama', '$genre', '$jumlah_halaman', '$tanggal_rilis','$deskripsi')";

    $result = mysqli_query($conn, $sql);

    if ( $result ) {
        echo"
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo"
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'tambah.php';
            </script>
        ";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #8d6624;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #ffad32;
      border-radius: 10px;
    }

    .container h1 {
      color: #8d6624;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(241, 148, 26);
      color: #000000;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }
    </style>
</head>
<body>
    <div class="container">
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required><br><br>
        <label for="genre">Genre : </label>
        <input type="text" name="genre" required><br><br>
        <label for="jumlah_halaman">Jumlah Halaman : </label>
        <input type="number" name="jumlah_halaman" required><br><br>
        <label for="tanggal_rilis">Tanggal Rilis : </label>
        <input type="date" name="tanggal_rilis" required><br><br>
        <label for="deskripsi">Deskripsi : </label>
        <input type="text" name="deskripsi" required><br><br>
        <button type="submit" name="tambah">Tambah</button>
    </form>
    </div>
</body>
</html>