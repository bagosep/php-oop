<?php
require "koneksi.php";
require "class.php";

$db = Database::connect();
$mahasiswa = new Mahasiswa($db);
$rows = $mahasiswa->getDataMahasiswa();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INPUT INSERT PDO</title>
  </head>
  <body>
    <form method="POST" action="insert_PDO.php">
      <table>
        <tr>
          <td>NPM</td><td><input width="200px" name="npm" placeholder="Masukan NPM"></input></td>
        </tr>
        <tr>
          <td>Nama</td><td><input width="200px" name="nama" placeholder="Masukan nama"></input></td>
        </tr>
        <tr>
          <td>Semester</td><td><input width="200px" name="semester" placeholder="Umur"></input></td>
        </tr>
        <tr>
          <td>Umur</td><td><input width="200px" name="umur" placeholder="Masukan Umur"></input></td>
        </tr>
        </table>
      <button type="submit">oke</button>
  </form>
  </body>
</html>
