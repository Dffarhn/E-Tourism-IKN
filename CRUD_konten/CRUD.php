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
            echo '<script>alert("delete successful!");</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
            exit;
        } else {
            echo "mayah mayah";
        }
        // Proses untuk Delete
    } elseif($action == 'Update') {
        $updateblog = mysqli_query($conn, "UPDATE `destinasiwisata` SET `judul`='$judul_update',`gambar`='$image_update',`deskripsi`='$deskripsi_update',`id_jenis`='$jenis_update' WHERE `id_destinasi`='$id_update'");
        
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