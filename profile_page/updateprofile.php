<?php 

include "../database/koneksi.php";


$id_admin = $_POST['id'];
$username = $_POST['username'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

$updateadmin = mysqli_query($conn, "UPDATE `admin` SET `username`='$username',`no_handphone`='$no_hp',`email`='$email ' WHERE `id_admin`='$id_admin'");

if ($updateadmin) {
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
        title: "Update profile successful!",
        icon: "success",
    }).then(function() {
        window.location.href = "../profile_page/profile.php";
    });
</script>
</body>
</html>';
exit;
} else {
    echo "mayah mayah";
}

?>
