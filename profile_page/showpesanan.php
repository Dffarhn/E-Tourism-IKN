<?php
session_start();


if (isset($_SESSION['admin']) && isset($_GET['id_pesanan']))
{
  $admin_now = $_SESSION['admin'];

  $profile_now = $_GET['id_pesanan'];

  include "../database/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-Tourism</title>
    <link rel="stylesheet" href="profilestylerr.css" />
    <link rel="stylesheet" href="ratingstar.css">
  </head>
  <body>

    <?php 
    include "../Navbar/navbarmain.php"
    ?>
    <?php 
    include "../Navbar/navbarprofile.php"
    ?>

    <div class="col-md-8 mt-5 px-5 content_profile">
        <div class="data_pribadi">
          <h3>Pesanan Saya</h3>

<?php

$result = mysqli_query($conn, "SELECT * ,d.judul FROM booking_history h JOIN bookingdestinasi d ON h.id_booking = d.id_booking WHERE h.id_purchase = '$profile_now' ");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>      <form action="addreview.php" method="post">
    
    <div class="mt-4 list_pesanan px-3">
      <div class="detail" >
        
        <h3><?php echo $row['judul'] ?></h3>
        <p>Tanggal reservasi : <?php $tanggal_dari_database=$row['tanggal_pemesanan']; 
                
                $tanggal_diubah = date("d F Y", strtotime($tanggal_dari_database));

// Menampilkan hasil
echo $tanggal_diubah; ?></p>
        <p>Nama : <?php echo $row['nama_pemesan'] ?></p>
        <p>No handphone : <?php echo $row['no_hp_pemesanan'] ?></p>
        <p>Email : <?php echo $row['email_pemesanan'] ?></p>
        <p> Pembayaran : <?php echo $row['pembayaran'] ?></p>
        <p> Harga : Rp. <?php  $harga_awal = $row['harga_total'];
                   $harga_awal_format = number_format($harga_awal, 0, ',', '.');
                   echo $harga_awal_format;
                  
                   ?></p>

        <h3>Beri Review</h3>
        <textarea name="review" id="" cols="30" rows="10" style="width: 100%;"></textarea>
        <h3>Rating</h3>
        <!-- <select id="rating" name="rating">
            <option value="" disabled selected>Rating</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> -->
        <div class="rating-box">
        <!-- <header>How was your experience?</header> -->
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </div>

        <input type="hidden" id="rating" name="rating" value="">

        <input type="hidden" name="id_admin" value = <?php echo $row['id_admin'] ?> >
        <input type="hidden" name="id_booking" value = <?php echo $row['id_booking'] ?> >

      </div>
      <div class="but_place">

       <input class="lihat_button" type="submit" value="Kirim">
      
      </div>
    </div>
        </form>
<?php }?>

        </div>
    </div>
    
  </body>
  <script src="starrat.js"></script>
</html>

<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>
