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
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
 	exit;
} else {
    echo "Registrasi gagal. Coba lagi.";
}

}
?>