<?php 
include "../database/koneksi.php";

$isi_review = $_POST['review'];
$rating_review = $_POST['rating'];
$id_admin_pemesan = $_POST['id_admin'];
$id_booking_pemesan =   $_POST['id_booking'];


$nsert_review = mysqli_query($conn, "INSERT INTO `testimoni`(`id_testimoni`, `isi_testimoni`, `rating`, `id_admin`, `id_booking`) VALUES (NULL,'$isi_review','$rating_review','$id_admin_pemesan ','$id_booking_pemesan')");
        
        if ($nsert_review) { 
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
                        title: "Review Success",
                        text : "Terimakasih sudah memberi review",
                        icon: "success",
                    }).then(function() {
                        window.location.href = "../profile_page/pesanansaya.php";
                    });
                </script>
            </body>
            </html>';
            exit;
        } else {
            echo "mayah mayah";
        }





?>