<?php 
session_start();

include "../database/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password = md5($password);

$prevQuery = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
$data = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);

if ($password == $data['password'])
{
    $_SESSION['admin'] = $data['id_admin'];
	$_SESSION['salahpw'] = false;
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Home_Page/home.php">';
	exit;
}
else
	$_SESSION['salahpw'] = true;
	header("location:Login.php")

?>
