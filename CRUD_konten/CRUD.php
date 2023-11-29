<?php 
session_start();

include "../database/koneksi.php";

$id_update = $_POST['id_destinasi'];
$judul_update = $_POST['judul'];
$jenis_update = $_POST['jenis'];
$image_update = $_POST['image_url'];
$deskripsi_update = $_POST['deskripsi'];


if(isset($_POST['action'])) {
    $action = $_POST['action'];
    
    if($action == 'Delete') {
        $deleteblog = mysqli_query($conn, "DELETE FROM `destinasiwisata` WHERE `id_destinasi` = '$id_update';");
        
        if ($deleteblog) {
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
                title: "Delete Blog successful!",
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
        $updateblog = mysqli_query($conn, "UPDATE `destinasiwisata` SET `judul`='$judul_update',`gambar`='$image_update',`deskripsi`='$deskripsi_update',`id_jenis`='$jenis_update' WHERE `id_destinasi`='$id_update'");
        
        if ($updateblog) {
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
                title: "Update blog successful!",
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