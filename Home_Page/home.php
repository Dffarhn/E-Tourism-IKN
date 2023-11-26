<?php
session_start();
if (isset($_SESSION['admin']))
{

  include "../database/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-Tourism</title>
    <link rel="stylesheet" href="stylehome.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm navbar sticky-top ">
      <div class="container">
        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.05273 4.09787C7.62207 5.09823 6.32837 6.28098 5.20532 7.6124C9.79462 7.18633 15.6252 7.88204 22.3944 11.2667C29.623 14.8809 35.4438 15.0031 39.4948 14.2217C39.1272 13.1088 38.6644 12.0392 38.1163 11.0224C33.479 11.5115 27.534 10.8641 20.6056 7.39998C16.206 5.20018 12.3278 4.29401 9.05273 4.09787ZM35.4074 7.16665C31.7453 3.075 26.4234 0.5 20.5 0.5C18.7605 0.5 17.0727 0.722107 15.4637 1.13948C17.6429 1.73409 19.9579 2.60399 22.3944 3.82227C27.467 6.35853 31.8464 7.17516 35.4074 7.16665ZM40.3609 18.1281C35.4669 19.0945 28.7088 18.896 20.6056 14.8444C13.03 11.0566 7.00043 11.1043 2.9339 12.008C2.724 12.0546 2.51904 12.1036 2.31903 12.1546C1.78662 13.3125 1.36163 14.5301 1.0567 15.7945C1.38239 15.7075 1.71893 15.6248 2.06616 15.5476C6.99957 14.4513 13.9701 14.4989 22.3944 18.7111C29.9701 22.4989 35.9996 22.4512 40.0662 21.5475C40.2055 21.5166 40.3428 21.4846 40.4778 21.4516C40.4926 21.1363 40.5 20.819 40.5 20.5C40.5 19.6975 40.4528 18.906 40.3609 18.1281ZM39.8248 25.6723C34.9783 26.5196 28.417 26.1944 20.6056 22.2888C13.03 18.501 7.00043 18.5487 2.9339 19.4524C2.03125 19.6529 1.21924 19.8972 0.50293 20.1551C0.500977 20.2698 0.5 20.3848 0.5 20.5C0.5 31.5457 9.45429 40.5 20.5 40.5C29.7571 40.5 37.5453 34.2109 39.8248 25.6723Z" fill="url(#paint0_linear_340_75)"/>
            <defs>
            <linearGradient id="paint0_linear_340_75" x1="36.5" y1="43.7" x2="-3.23321" y2="36.0931" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5D50C6"/>
            <stop offset="1" stop-color="#F85E9F"/>
            </linearGradient>
            </defs>
            </svg>
            
        <a class="navbar-brand nav-link text-dark fw-bold" href="#">E-Tourism</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto">
            <a class="nav-link active text-dark me-5" aria-current="page" href="../Home_Page/home.php"> Home </a>
            <a class="nav-link text-dark me-5" href="../Destinasi_Page/destinasi.html"> Destinasi </a>
            <a class="nav-link text-dark me-5" href="#project"> FAQ </a>
            <a class="nav-link text-dark me-5" href="#contact"> Manage </a>
            <a class="nav-link text-dark me-5" href="../Login_Page/logout.php"> Logout </a>
          </div>
        </div>
      
      </div>
    </nav>

    <div class="gretting_cont  d-flex">
        <div class="col-md-2 mt-5" >
        </div>
        <div class="col-md-8 mt-5 row justify-content-center text-center" >
            <!-- <div class="card bg-transparent border-0" style="width: 17rem; height: 100px;">
                <img src="/Home Page/pict/fill1top.png" class="card-img-top" alt="...">
              </div>
            <div class="card bg-transparent border-0" style="width: 17rem; height: 100px;">
                <img src="/Home Page/pict/fill2top.png" class="card-img-top" alt="...">
              </div>
              <div class="card bg-transparent border-0" style="width: 17rem; height: 100px;">
                  <img src="/Home Page/pict/fill3top.png" class="card-img-top" alt="...">
                </div> -->

            <h1 class="gretting_word p-5">MILIKI PENGALAMAN YANG TAK TERLUPAKAN</h1>
        </div>
        <div class="col-md-2 mt-5" >
        </div>
    </div>

    <div class="destinasi_container mt-5 ps-5">
        <div>
            <h4>Destinasi Terbaik</h4>
        </div>
        <div>
            <h3>Jelajahi Destinasi Wisata Indonesia</h3>
            <p>Pilih Salah Satu Destinasi Wisata Terpopuler Di Indonesia</p>

        </div>
    </div>

    <div class="destinasi_choice px-5">
        <div class="row mt-5 justify-content-center">
<?php

$result = mysqli_query($conn, "SELECT * FROM `destinasiwisata` ORDER BY RAND() LIMIT 6;");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
            <div class="col-md-4 mb-3">
            <a href="../Blog_Page/blog.php?id_blog=<?php echo $row['id_destinasi']; ?>" style="text-decoration: none; color: inherit;">
              <div class="card border-top-0 card_show">
                <img src="pict/<?php echo $row['gambar']?>" class="card-img-top" alt="Project 1">
                <div class="card-body">
                  <h5 class="card-title"><?php echo  $row['judul']; ?></h5>
                </div>
              </div>
            </a>
            </div>
<?php } ?>
          
          </div>

    </div>

    <div class="liburan_container px-5 mt-5">
        <div class="head_liburan_container">
            <h3>Promo Liburan</h3>
            <p>Ambil Promo Liburan Secepatnya Tanpa Ragu</p>

        </div>

        <div class="choose_liburan_container">
            <h4>Terbaru</h4>
            <h4>Terpopuler</h4>
            <h4>Discount</h4>
        </div>

        <div class="row mt-5 justify-content-center">
<?php

$result2 = mysqli_query($conn, "SELECT * FROM `bookingdestinasi` ORDER BY RAND() LIMIT 6;");
while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC))
{
?>
          <div class="col-md-4 mb-3">
          <a href="../Show_Page/showpage.php?id_booking=<?php echo $row['id_booking']; ?>" style="text-decoration: none; color: inherit;">
            <div class="card card_show">
              <img src="pict/liburan1.png" class="card-img-top" alt="Project 1">
              <div class="card-body">
                <h3 class="card-title"><?php echo $row['judul'] ?></h3>
                <h4 class="card-text border-0 px-0 price_liburan ">
                  <p class="discount_price">Rp. <?php
                  
                   

                  $harga_promo = $row['harga_promo'];
                  $harga_promo_format = number_format($harga_promo, 0, ',', '.');
                  echo $harga_promo_format;
                  
                  
                  
                  ?></p>
                  <p class="real_price">Rp. <?php 
                   $harga_awal = $row['harga_awal'];
                   $harga_awal_format = number_format($harga_awal, 0, ',', '.');
                   echo $harga_awal_format;
                  
                  
                  
                  
                  
                  ?></p>

                </h4>
                <p class="card-text deskripsi_liburan"><?php $deskripsi= $row['deskripsi']; 
                $words = str_word_count($deskripsi, 1);

                // Mengambil 50 kata pertama  
                $limitedDescription = implode(' ', array_slice($words, 0, 25));

                echo $limitedDescription." ...";
                ?></p>
                <h4 class="card-text border-0 px-0 price_liburan"> 
                  4.5
                  <svg width="22" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9189 12.3194C15.6599 12.5704 15.5409 12.9334 15.5999 13.2894L16.4889 18.2094C16.5639 18.6264 16.3879 19.0484 16.0389 19.2894C15.6969 19.5394 15.2419 19.5694 14.8689 19.3694L10.4399 17.0594C10.2859 16.9774 10.1149 16.9334 9.93989 16.9284H9.66889C9.57489 16.9424 9.48289 16.9724 9.39889 17.0184L4.96888 19.3394C4.74988 19.4494 4.50188 19.4884 4.25888 19.4494C3.66688 19.3374 3.27188 18.7734 3.36888 18.1784L4.25888 13.2584C4.31788 12.8994 4.19888 12.5344 3.93988 12.2794L0.328876 8.77937C0.0268757 8.48637 -0.0781242 8.04637 0.0598758 7.64939C0.193876 7.25339 0.535876 6.96439 0.948876 6.89939L5.91888 6.17839C6.29688 6.13939 6.62888 5.90939 6.79888 5.56939L8.98889 1.07939C9.04089 0.97939 9.10789 0.88739 9.18889 0.80939L9.27889 0.73939C9.32589 0.68739 9.37988 0.64439 9.43989 0.60939L9.54889 0.56939L9.71889 0.49939H10.1399C10.5159 0.53839 10.8469 0.76339 11.0199 1.09939L13.2389 5.56939C13.3989 5.89639 13.7099 6.12339 14.0689 6.17839L19.0389 6.89939C19.4589 6.95939 19.8099 7.24939 19.9489 7.64939C20.0799 8.05037 19.9669 8.49037 19.6589 8.77937L15.9189 12.3194Z" fill="#FF5722"/>
                    </svg>
                </h4>
              </div>
            </div>
          </a>
          </div>
<?php } ?>
        </div>
    </div>

    <div class = "our_service px-5">
      <div class="row mt-5 justify-content-center">
        <div class="col-md-6 mb-3">
          <img class="ourservice_pict" src="pict/Ourservice.png" alt="" width=100% height=70%>

        </div>
        <div class="col-md-6 mb-3 our_service_word" >
          <h2>Our Service</h2>

          

        </div>

      </div>

    </div>




    <div class="about_home">
      <div class="row mt-5 justify-content-center">
        <div class="col-md-5 sosmed_home ps-5 py-5">
          <h5><svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.05273 4.09787C7.62207 5.09823 6.32837 6.28098 5.20532 7.6124C9.79462 7.18633 15.6252 7.88204 22.3944 11.2667C29.623 14.8809 35.4438 15.0031 39.4948 14.2217C39.1272 13.1088 38.6644 12.0392 38.1163 11.0224C33.479 11.5115 27.534 10.8641 20.6056 7.39998C16.206 5.20018 12.3278 4.29401 9.05273 4.09787ZM35.4074 7.16665C31.7453 3.075 26.4234 0.5 20.5 0.5C18.7605 0.5 17.0727 0.722107 15.4637 1.13948C17.6429 1.73409 19.9579 2.60399 22.3944 3.82227C27.467 6.35853 31.8464 7.17516 35.4074 7.16665ZM40.3609 18.1281C35.4669 19.0945 28.7088 18.896 20.6056 14.8444C13.03 11.0566 7.00043 11.1043 2.9339 12.008C2.724 12.0546 2.51904 12.1036 2.31903 12.1546C1.78662 13.3125 1.36163 14.5301 1.0567 15.7945C1.38239 15.7075 1.71893 15.6248 2.06616 15.5476C6.99957 14.4513 13.9701 14.4989 22.3944 18.7111C29.9701 22.4989 35.9996 22.4512 40.0662 21.5475C40.2055 21.5166 40.3428 21.4846 40.4778 21.4516C40.4926 21.1363 40.5 20.819 40.5 20.5C40.5 19.6975 40.4528 18.906 40.3609 18.1281ZM39.8248 25.6723C34.9783 26.5196 28.417 26.1944 20.6056 22.2888C13.03 18.501 7.00043 18.5487 2.9339 19.4524C2.03125 19.6529 1.21924 19.8972 0.50293 20.1551C0.500977 20.2698 0.5 20.3848 0.5 20.5C0.5 31.5457 9.45429 40.5 20.5 40.5C29.7571 40.5 37.5453 34.2109 39.8248 25.6723Z" fill="url(#paint0_linear_340_75)"/>
            <defs>
            <linearGradient id="paint0_linear_340_75" x1="36.5" y1="43.7" x2="-3.23321" y2="36.0931" gradientUnits="userSpaceOnUse">
            <stop stop-color="#5D50C6"/>
            <stop offset="1" stop-color="#F85E9F"/>
            </linearGradient>
            </defs>
            </svg>

            <strong>E-Tourism</strong>
          
          </h5>

          <p>Jalan-jalan jadi lebih mudah dan <br> gampang, kemana aja!</p>

          <p class="follow_sosmed">
            
            <strong>Follow us</strong>

          
            <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="0.937744" y="0.0490723" width="40" height="40" rx="20" fill="white"/>
              <path d="M20.9377 10.0491C23.6547 10.0491 23.9937 10.0591 25.0597 10.1091C26.1247 10.1591 26.8497 10.3261 27.4877 10.5741C28.1477 10.8281 28.7037 11.1721 29.2597 11.7271C29.7682 12.227 30.1617 12.8317 30.4127 13.4991C30.6597 14.1361 30.8277 14.8621 30.8777 15.9271C30.9247 16.9931 30.9377 17.3321 30.9377 20.0491C30.9377 22.7661 30.9277 23.1051 30.8777 24.1711C30.8277 25.2361 30.6597 25.9611 30.4127 26.5991C30.1624 27.2668 29.7689 27.8717 29.2597 28.3711C28.7597 28.8794 28.1551 29.2728 27.4877 29.5241C26.8507 29.7711 26.1247 29.9391 25.0597 29.9891C23.9937 30.0361 23.6547 30.0491 20.9377 30.0491C18.2207 30.0491 17.8817 30.0391 16.8157 29.9891C15.7507 29.9391 15.0257 29.7711 14.3877 29.5241C13.7201 29.2735 13.1153 28.88 12.6157 28.3711C12.1072 27.8713 11.7137 27.2665 11.4627 26.5991C11.2147 25.9621 11.0477 25.2361 10.9977 24.1711C10.9507 23.1051 10.9377 22.7661 10.9377 20.0491C10.9377 17.3321 10.9477 16.9931 10.9977 15.9271C11.0477 14.8611 11.2147 14.1371 11.4627 13.4991C11.713 12.8313 12.1065 12.2264 12.6157 11.7271C13.1154 11.2183 13.7202 10.8248 14.3877 10.5741C15.0257 10.3261 15.7497 10.1591 16.8157 10.1091C17.8817 10.0621 18.2207 10.0491 20.9377 10.0491ZM20.9377 15.0491C19.6117 15.0491 18.3399 15.5759 17.4022 16.5135C16.4645 17.4512 15.9377 18.723 15.9377 20.0491C15.9377 21.3752 16.4645 22.6469 17.4022 23.5846C18.3399 24.5223 19.6117 25.0491 20.9377 25.0491C22.2638 25.0491 23.5356 24.5223 24.4733 23.5846C25.411 22.6469 25.9377 21.3752 25.9377 20.0491C25.9377 18.723 25.411 17.4512 24.4733 16.5135C23.5356 15.5759 22.2638 15.0491 20.9377 15.0491ZM27.4377 14.7991C27.4377 14.4676 27.306 14.1496 27.0716 13.9152C26.8372 13.6808 26.5193 13.5491 26.1877 13.5491C25.8562 13.5491 25.5383 13.6808 25.3039 13.9152C25.0694 14.1496 24.9377 14.4676 24.9377 14.7991C24.9377 15.1306 25.0694 15.4485 25.3039 15.683C25.5383 15.9174 25.8562 16.0491 26.1877 16.0491C26.5193 16.0491 26.8372 15.9174 27.0716 15.683C27.306 15.4485 27.4377 15.1306 27.4377 14.7991ZM20.9377 17.0491C21.7334 17.0491 22.4965 17.3651 23.0591 17.9278C23.6217 18.4904 23.9377 19.2534 23.9377 20.0491C23.9377 20.8447 23.6217 21.6078 23.0591 22.1704C22.4965 22.733 21.7334 23.0491 20.9377 23.0491C20.1421 23.0491 19.379 22.733 18.8164 22.1704C18.2538 21.6078 17.9377 20.8447 17.9377 20.0491C17.9377 19.2534 18.2538 18.4904 18.8164 17.9278C19.379 17.3651 20.1421 17.0491 20.9377 17.0491Z" fill="#2C8900"/>
              </svg>

              <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.937744" y="0.12915" width="40" height="39.92" rx="19.96" fill="white"/>
                <path d="M20.9377 10.1292C15.4377 10.1292 10.9377 14.6192 10.9377 20.1492C10.9377 25.1492 14.5977 29.2991 19.3777 30.0491V23.0492H16.8377V20.1492H19.3777V17.9392C19.3777 15.4292 20.8677 14.0492 23.1577 14.0492C24.2477 14.0492 25.3877 14.2392 25.3877 14.2392V16.7092H24.1277C22.8877 16.7092 22.4977 17.4792 22.4977 18.2692V20.1492H25.2777L24.8277 23.0492H22.4977V30.0491C24.8542 29.677 27 28.4747 28.5477 26.6592C30.0954 24.8438 30.9431 22.5348 30.9377 20.1492C30.9377 14.6192 26.4377 10.1292 20.9377 10.1292Z" fill="#2C8900"/>
                </svg>

              <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.937744" y="0.0490723" width="38" height="38" rx="19" fill="white"/>
                <path d="M26.9377 10.0491C27.4682 10.0491 27.9769 10.2598 28.352 10.6349C28.727 11.0099 28.9377 11.5186 28.9377 12.0491V26.0491C28.9377 26.5795 28.727 27.0882 28.352 27.4633C27.9769 27.8384 27.4682 28.0491 26.9377 28.0491H12.9377C12.4073 28.0491 11.8986 27.8384 11.5235 27.4633C11.1485 27.0882 10.9377 26.5795 10.9377 26.0491V12.0491C10.9377 11.5186 11.1485 11.0099 11.5235 10.6349C11.8986 10.2598 12.4073 10.0491 12.9377 10.0491H26.9377ZM26.4377 25.5491V20.2491C26.4377 19.3845 26.0943 18.5553 25.4829 17.9439C24.8715 17.3325 24.0423 16.9891 23.1777 16.9891C22.3277 16.9891 21.3377 17.5091 20.8577 18.2891V17.1791H18.0677V25.5491H20.8577V20.6191C20.8577 19.8491 21.4777 19.2191 22.2477 19.2191C22.619 19.2191 22.9751 19.3666 23.2377 19.6291C23.5002 19.8917 23.6477 20.2478 23.6477 20.6191V25.5491H26.4377ZM14.8177 15.6091C15.2633 15.6091 15.6906 15.4321 16.0057 15.117C16.3207 14.802 16.4977 14.3746 16.4977 13.9291C16.4977 12.9991 15.7477 12.2391 14.8177 12.2391C14.3695 12.2391 13.9397 12.4171 13.6227 12.7341C13.3058 13.051 13.1277 13.4809 13.1277 13.9291C13.1277 14.8591 13.8877 15.6091 14.8177 15.6091ZM16.2077 25.5491V17.1791H13.4377V25.5491H16.2077Z" fill="#2C8900"/>
                </svg>

              <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.937744" y="0.0490723" width="40" height="40" rx="20" fill="white"/>
                <path d="M10.9418 30.0491L12.2938 25.0811C11.4029 23.5539 10.9349 21.8171 10.9378 20.0491C10.9378 14.5261 15.4148 10.0491 20.9378 10.0491C26.4608 10.0491 30.9378 14.5261 30.9378 20.0491C30.9378 25.5721 26.4608 30.0491 20.9378 30.0491C19.1705 30.0519 17.4344 29.5842 15.9078 28.6941L10.9418 30.0491ZM17.3288 15.3571C17.1996 15.3651 17.0734 15.3991 16.9578 15.4571C16.8493 15.5185 16.7503 15.5953 16.6638 15.6851C16.5438 15.7981 16.4758 15.8961 16.4028 15.9911C16.0332 16.4721 15.8344 17.0625 15.8378 17.6691C15.8398 18.1591 15.9678 18.6361 16.1678 19.0821C16.5768 19.9841 17.2498 20.9391 18.1388 21.8241C18.3528 22.0371 18.5618 22.2511 18.7868 22.4501C19.8901 23.4215 21.205 24.1221 22.6268 24.4961L23.1958 24.5831C23.3808 24.5931 23.5658 24.5791 23.7518 24.5701C24.043 24.555 24.3274 24.4762 24.5848 24.3391C24.7157 24.2716 24.8435 24.1982 24.9678 24.1191C24.9678 24.1191 25.0108 24.0911 25.0928 24.0291C25.2278 23.9291 25.3108 23.8581 25.4228 23.7411C25.5058 23.6551 25.5778 23.5541 25.6328 23.4391C25.7108 23.2761 25.7888 22.9651 25.8208 22.7061C25.8448 22.5081 25.8378 22.4001 25.8348 22.3331C25.8308 22.2261 25.7418 22.1151 25.6448 22.0681L25.0628 21.8071C25.0628 21.8071 24.1928 21.4281 23.6618 21.1861C23.6058 21.1617 23.5458 21.1478 23.4848 21.1451C23.4163 21.138 23.3472 21.1457 23.282 21.1676C23.2168 21.1896 23.1571 21.2252 23.1068 21.2721V21.2701C23.1018 21.2701 23.0348 21.3271 22.3118 22.2031C22.2703 22.2588 22.2131 22.301 22.1476 22.3241C22.082 22.3473 22.0111 22.3504 21.9438 22.3331C21.8786 22.3156 21.8148 22.2936 21.7528 22.2671C21.6288 22.2151 21.5858 22.1951 21.5008 22.1581L21.4958 22.1561C20.9237 21.9063 20.394 21.5689 19.9258 21.1561C19.7998 21.0461 19.6828 20.9261 19.5628 20.8101C19.1693 20.4333 18.8265 20.0071 18.5428 19.5421L18.4838 19.4471C18.4414 19.3832 18.4071 19.3144 18.3818 19.2421C18.3438 19.0951 18.4428 18.9771 18.4428 18.9771C18.4428 18.9771 18.6858 18.7111 18.7988 18.5671C18.8928 18.4474 18.9806 18.3229 19.0618 18.1941C19.1798 18.0041 19.2168 17.8091 19.1548 17.6581C18.8748 16.9741 18.5848 16.2931 18.2868 15.6171C18.2278 15.4831 18.0528 15.3871 17.8938 15.3681C17.8398 15.3621 17.7858 15.3561 17.7318 15.3521C17.5975 15.3454 17.4629 15.3477 17.3288 15.3571Z" fill="#2C8900"/>
                </svg>
                    
                
              


          </p>

        </div>
        <div class="col-md-7 about_us">
          <div>
            <h5>Tentang</h5>
            <p>Perusahaan</p>
            <p>Blog</p>
          </div>
          <div>
            <h5>Produk</h5>
            <p>Ringkasan</p>
            <p>Fitur</p>
          </div>
          <div>
            <h5>Bantuan</h5>
            <p>Syarat dan ketentuan</p>
            <p>Kebijakan Privasi</p>
            <p>Kontak</p>
          </div>
        
        </div>

    </div>
    </div>


    <footer>

      <p>Copyright @2023  E-Tourism All Rights Reserved</p>

    </footer>

    

  </body>
</html>

<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>
