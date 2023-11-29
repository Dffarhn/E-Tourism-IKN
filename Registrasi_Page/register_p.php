<?php 
session_start();

include "../database/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];
// $password = md5($password);

if ($password === $konfirmasi_password) {
    # code...
    $insertadmin = mysqli_query($conn, "INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES (NULL, '$username', MD5('$password'));");
    if ($insertadmin) {
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Your Page Title</title>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    title: "Registrasi successful!",
                    text : "Dikembalikan ke halaman login",
                    icon: "success",
                }).then(function() {
                    window.location.href = "../Login_Page/Login.php";
                });
            </script>
        </body>
        </html>';
        exit;
    } else {
        echo "Registrasi gagal. Coba lagi.";
    }
}else{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Your Page Title</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
    </head>
    <body>
        <script>
            Swal.fire({
                title: "Registration failed!",
                text : "Password tidak sama",
                icon: "error", //
            }).then(function() {
                window.location.href = "../Registrasi_Page/registrasi.php";
            });
        </script>
    </body>
    </html>';
    exit;

}


?>


