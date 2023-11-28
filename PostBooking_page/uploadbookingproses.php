<?php
include "../database/koneksi.php";
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form data

    // Get values from the form
    $judul = $_POST["judul"];
    $jenis = $_POST["jenis"];
    $harga = $_POST["harga"];
    $harga_promo = $_POST["harga_promo"];
    $fasilitas = $_POST["fasilitas"];
    $image_url = $_POST["image_url"];
    $deskripsi = $_POST["deskripsi"];

    $insertblog = mysqli_query($conn, "INSERT INTO `bookingdestinasi`(`id_booking`, `gambar`, `judul`, `harga_awal`, `harga_promo`, `deskripsi`, `fasilitas`, `id_testimoni`, `id_jenis`) VALUES (NULL,'$image_url','$judul','$harga','$harga_promo','$deskripsi','$fasilitas',NULL,'$jenis')");
if ($insertblog) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../Admin_Page/admin.php">';
 	exit;
} else {
    echo "Registrasi gagal. Coba lagi.";
}

}
?>