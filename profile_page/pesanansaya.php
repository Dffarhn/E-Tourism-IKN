<?php
session_start();


if (isset($_SESSION['admin']))
{
  // echo $_SESSION['admin'];

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
    <link rel="stylesheet" href="profilestyle.css" />
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

        </div>
    </div>
    
  </body>
</html>

<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>
