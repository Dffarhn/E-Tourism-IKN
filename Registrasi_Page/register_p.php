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
        echo '<script>alert("Registration successful!");</script>';
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Login_Page/Login.php">';
         exit;
    } else {
        echo "Registrasi gagal. Coba lagi.";
    }
}else{
    echo '<script>alert("Cek Password");</script>';
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Registrasi_Page/registrasi.php">';

}


?>
