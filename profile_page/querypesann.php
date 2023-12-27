<?php
include "../database/koneksi.php";
include "../profile_page/checkoutall.php";


// Check if the request method is POST and the expected data is present
if (isset ($_POST['query'])) {
  // Ambil nilai 'jumlahperbarang' dari $_POST
  $jumlahperbarang = $_POST['query'];

   // Mengecho kembali nilai untuk tujuan demonstrasi

  // Sekarang Anda memiliki $jumlahperbarang array dengan data dari JavaScript
  // Lanjutkan dengan pemrosesan lebih lanjut, misalnya, menghitung total harga, dsb.

  // Contoh: Hitung total harga
  $totalHarga = 0;
  // foreach ($jumlahperbarang as $jumlah) {
  //     $totalHarga += $jumlah;
  // }

  $jumlahper_booking_str = implode(',', $jumlahperbarang);
  $_SESSION['jumlahperbarang_booking'] = $jumlahper_booking_str;

  for ($i=0; $i < count($hargaperbarang) ; $i++) { 

    $totalHarga += $hargaperbarang[$i]*$jumlahperbarang[$i];


    # code...
  }
  $_SESSION['totalHarga'] = $totalHarga;

  // Tanggapi dengan total harga (atau data lain yang ingin Anda kirimkan kembali ke JavaScript)
  echo $totalHarga;
} else {
  // Tanggapi dengan pesan kesalahan jika metode permintaan bukan POST
  echo "salah";
}
?>
