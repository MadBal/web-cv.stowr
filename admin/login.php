<?php
session_start();
require '../koneksi.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = query("SELECT admin FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}


if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {     // mysqli_num_rows() -> menghitung ada berapa baris yang dikembalikan dari fungsi SELECT di atas, jika ketemu akan bernilai 1, dan jika tidak akan bernilai 0

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {      //  (password_verify($password, $row["password"]) -> membandingkan password yang dimasukkan user dengan password yg telah terdaftar di server
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST["remember"])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>
    <!-- <a href="registrasi.php">buat akun</a> -->

    <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>