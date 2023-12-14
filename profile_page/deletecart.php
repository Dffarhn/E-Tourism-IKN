<?php 
session_start();
include "../database/koneksi.php";

// $id_admin = $_SESSION['admin'];
$id_cart = $_GET['id_cart'];

$cart_insert = mysqli_query($conn, "DELETE FROM `cart` WHERE id_cart ='$id_cart' ") ;
        
        if ($cart_insert) {
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
                        title: "delete from cart successfully",
                        text : "cart bisa di lihat di bagian profile",
                        icon: "success",
                    }).then(function() {
                        // Sukses mengarahkan ke halaman pembelian
                        window.history.back();
                    })
                </script>
            </body>
            </html>';
            exit;
        } else {
            echo "mayah mayah";
        }





?>