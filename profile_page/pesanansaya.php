<?php
session_start();


if (isset($_SESSION['admin']))
{
  // echo $_SESSION['admin'];

  $profile_now = $_SESSION['admin'];

  include "../database/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-Tourism</title>
    <link rel="stylesheet" href="profilestylerr.css" />
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

$result = mysqli_query($conn, "SELECT * ,d.judul FROM booking_history h JOIN bookingdestinasi d ON h.id_booking = d.id_booking WHERE h.id_admin = '$profile_now' ");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
          <div class="mt-4 list_pesanan px-3">
            <div class="detail" >
              
              <h5><?php echo $row['judul'] ?></h5>
              <p><?php echo $row['tanggal_pemesanan'] ?></p>
              <p><?php echo $row['nama_pemesan'] ?>, Rp. <?php echo $row['harga_total'] ?></p>
            </div>
            <div class="but_place">
              <button class="lihat_button" >Lihat</button>
            </div>
          </div>
<?php }?>

        </div>
    </div>
    
  </body>
</html>

<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>
