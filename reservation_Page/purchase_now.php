<?php 
include "../database/koneksi.php";

$nama_pemesan = $_POST['nama_lengkap'];
$date_pemesan = $_POST['reservasi'];
$nohp_pemesan = $_POST['no_hp'];
$email_pemesan = $_POST['email'];
$jenis_bayar = $_POST['Pembayaran_melalui'];
$harga_pemesanan = $_POST['harga'];
$id_admin_pemesan = $_POST['id_admin'];
$id_booking_pemesan =   $_POST['id_booking'];
echo $id_admin_pemesan;


$purchase_booking = mysqli_query($conn, "INSERT INTO `booking_history`(`id_purchase`, `nama_pemesan`, `tanggal_pemesanan`, `no_hp_pemesanan`, `email_pemesanan`, `pembayaran`, `voucher`, `harga_total`, `id_admin`, `id_booking`) 
VALUES (null,'$nama_pemesan','$date_pemesan','$nohp_pemesan','$email_pemesan','$jenis_bayar',NULL,'$harga_pemesanan','$id_admin_pemesan','$id_booking_pemesan')");
        
        if ($purchase_booking) {
            echo '<script>alert("Transaction successful!");</script>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Home_Page/home.php">';
            exit;
        } else {
            echo "mayah mayah";
        }





?>