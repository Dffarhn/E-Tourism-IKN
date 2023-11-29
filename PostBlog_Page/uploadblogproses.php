<?php
include "../database/koneksi.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form data

    // Get values from the form
    $judul = $_POST["judul"];
    $jenis = $_POST["jenis"];
    $image_url = $_POST["image_url"];
    $deskripsi = $_POST["deskripsi"];

    $insertblog = mysqli_query($conn, "INSERT INTO `destinasiwisata`(`id_destinasi`, `judul`, `gambar`, `deskripsi`, `id_jenis`) VALUES (NULL,'$judul','$image_url','$deskripsi','$jenis')");
if ($insertblog) {
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
                title: "Upload Blog successful!",
                icon: "success",
            }).then(function() {
                window.location.href = "../Admin_Page/admin.php";
            });
        </script>
    </body>
    </html>';
 	exit;
} else {
    echo "Registrasi gagal. Coba lagi.";
}

}
?>