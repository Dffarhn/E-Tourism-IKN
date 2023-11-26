<?php 
session_start();

include "../database/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
// $password = md5($password);

$insertadmin = mysqli_query($conn, "INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES (NULL, '$username', MD5('$password'));");
if ($insertadmin) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Login_Page/Login.php">';
 	exit;
} else {
    echo "Registrasi gagal. Coba lagi.";
}

?>
