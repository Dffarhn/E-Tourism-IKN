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
        $deleteblog = mysqli_query($conn, "DELETE FROM `bookingdestinasi` WHERE `id_booking`='$id_update';");
        
        if ($deleteblog) {
            echo '<script>alert("delete successful!");</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
            exit;
        } else {
            echo "mayah mayah";
        }
        // Proses untuk Delete
    } elseif($action == 'Update') {
        $updateblog = mysqli_query($conn, "UPDATE `bookingdestinasi` SET `gambar`='$image_update',`judul`='$judul_update',`harga_awal`='$harga_update',`harga_promo`='$harga_promo_update',`deskripsi`='$deskripsi_update',`fasilitas`='$fasilitas_update',`id_testimoni`= NULL,`id_jenis`='$jenis_update' WHERE `id_booking`='$id_update'");
        
        if ($updateblog) {
            echo '<script>alert("update successful!");</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
            exit;
        } else {
            echo "mayah mayah";
        }
        // Proses untuk Update
    } else {
    }
}