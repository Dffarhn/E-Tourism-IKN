<?php 
session_start();

include "../database/koneksi.php";

$id_update = $_POST['id_booking'];
$judul_update = $_POST['judul'];
$harga_update = $_POST['harga'];
$harga_promo_update = $_POST['harga_promo'];
$fasilitas_update = $_POST['fasilitas'];

$jenis_update = $_POST['jenis'];
$image_update = $_POST['image_url'];
$deskripsi_update = $_POST['deskripsi'];


if(isset($_POST['action'])) {
    $action = $_POST['action'];
    
    if($action == 'Delete') {
        $deletebooking = mysqli_query($conn, "DELETE FROM `bookingdestinasi` WHERE `id_booking`='$id_update';");
        
        if ($deletebooking) {
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
                title: "Delete Booking successful!",
                icon: "success",
            }).then(function() {
                window.location.href = "../Admin_Page/admin.php";
            });
        </script>
    </body>
    </html>';
 	exit;
        } else {
            echo "mayah mayah";
        }
        // Proses untuk Delete
    } elseif($action == 'Update') {
        $updatebooking = mysqli_query($conn, "UPDATE `bookingdestinasi` SET `gambar`='$image_update',`judul`='$judul_update',`harga_awal`='$harga_update',`harga_promo`='$harga_promo_update',`deskripsi`='$deskripsi_update',`fasilitas`='$fasilitas_update',`id_testimoni`= NULL,`id_jenis`='$jenis_update' WHERE `id_booking`='$id_update'");
        
        if ($updatebooking) {
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
                title: "Update Booking successful!",
                icon: "success",
            }).then(function() {
                window.location.href = "../Admin_Page/admin.php";
            });
        </script>
    </body>
    </html>';
 	exit;
        } else {
            echo "mayah mayah";
        }
        // Proses untuk Update
    } else {
    }
}