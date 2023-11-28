<?php 
session_start();

include "../database/koneksi.php";

$blog_to_edit = isset($_GET['id_destinasi']) ? $_GET['id_destinasi'] : null;
$booking_to_edit = isset($_GET['id_booking']) ? $_GET['id_booking'] : null;
// $password = $_GET['password'];
// $password = md5($password);

// $prevQuery = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
// $data = mysqli_fetch_array($prevQuery, MYSQLI_ASSOC);

if (isset($blog_to_edit)) {
    $_SESSION['edit_blog'] = $blog_to_edit;
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../PostBlog_Page/postblog.php">';
	exit;

    # code...
}

if (isset($booking_to_edit)) {
    $_SESSION['edit_booking'] = $booking_to_edit;
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../PostBooking_page/postbooking.php">';
	exit;

    # code...
}
// if ($password == $data['password'])
// {
// 	if ($username === 'admin') {
// 		$_SESSION['admin_root'] = $data['id_admin'];
// 		$_SESSION['salahpw'] = false;
	
	
// 		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
// 		exit;
// 		# code...
// 	}else{
		
// 		$_SESSION['admin'] = $data['id_admin'];
// 		$_SESSION['salahpw'] = false;
	
	
// 		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Home_Page/home.php">';
// 		exit;
// 	}

// }
// else
// 	$_SESSION['salahpw'] = true;
// 	header("location:Login.php")

// ?>
