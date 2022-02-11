<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>
    <div align="center">
      <h2>Halaman Admin</h2>
      <table>
        <tr>
          <td><a href="?page=pelayanan">Input visi misi</a></td>
        </tr>
        <tr>
        <td><a href="logout.php">Logout</a></td>
        </tr>
      </table>
      <?php require "content.php"; ?>
    </div>
</body>
</html>