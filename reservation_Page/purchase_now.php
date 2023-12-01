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


$purchase_booking = mysqli_query($conn, "INSERT INTO `booking_history`(`id_purchase`, `nama_pemesan`, `tanggal_pemesanan`, `no_hp_pemesanan`, `email_pemesanan`, `pembayaran`, `voucher`, `harga_total`, `id_admin`, `id_booking`) 
VALUES (null,'$nama_pemesan','$date_pemesan','$nohp_pemesan','$email_pemesan','$jenis_bayar',NULL,'$harga_pemesanan','$id_admin_pemesan','$id_booking_pemesan')");
        
        if ($purchase_booking) {
            $last_id = mysqli_insert_id($conn); 
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
                        title: "Transaction successful!",
                        text : "Pesanan bisa dilihat di Purchase History",
                        icon: "success",
                    }).then(function() {
                        window.location.href = "../berhasilbeli_page/pembelian.php?id_purchase=' . $last_id . '";
                    });
                </script>
            </body>
            </html>';
            exit;
        } else {
            echo "mayah mayah";
        }





?>