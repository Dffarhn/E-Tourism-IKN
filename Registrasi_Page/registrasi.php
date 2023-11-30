<?php 
session_start();

include "../database/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <title>E-Tourism</title>
    <link rel="stylesheet" href="styleeregistrasi.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm navbar sticky-top">
      <div class="container">
        <svg width="41" height="41" viewBox="0 0 41 41" fill="none" xmlns="http://www.w3.org/2000/svg" class="me-2">
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M9.05273 4.09787C7.62207 5.09823 6.32837 6.28098 5.20532 7.6124C9.79462 7.18633 15.6252 7.88204 22.3944 11.2667C29.623 14.8809 35.4438 15.0031 39.4948 14.2217C39.1272 13.1088 38.6644 12.0392 38.1163 11.0224C33.479 11.5115 27.534 10.8641 20.6056 7.39998C16.206 5.20018 12.3278 4.29401 9.05273 4.09787ZM35.4074 7.16665C31.7453 3.075 26.4234 0.5 20.5 0.5C18.7605 0.5 17.0727 0.722107 15.4637 1.13948C17.6429 1.73409 19.9579 2.60399 22.3944 3.82227C27.467 6.35853 31.8464 7.17516 35.4074 7.16665ZM40.3609 18.1281C35.4669 19.0945 28.7088 18.896 20.6056 14.8444C13.03 11.0566 7.00043 11.1043 2.9339 12.008C2.724 12.0546 2.51904 12.1036 2.31903 12.1546C1.78662 13.3125 1.36163 14.5301 1.0567 15.7945C1.38239 15.7075 1.71893 15.6248 2.06616 15.5476C6.99957 14.4513 13.9701 14.4989 22.3944 18.7111C29.9701 22.4989 35.9996 22.4512 40.0662 21.5475C40.2055 21.5166 40.3428 21.4846 40.4778 21.4516C40.4926 21.1363 40.5 20.819 40.5 20.5C40.5 19.6975 40.4528 18.906 40.3609 18.1281ZM39.8248 25.6723C34.9783 26.5196 28.417 26.1944 20.6056 22.2888C13.03 18.501 7.00043 18.5487 2.9339 19.4524C2.03125 19.6529 1.21924 19.8972 0.50293 20.1551C0.500977 20.2698 0.5 20.3848 0.5 20.5C0.5 31.5457 9.45429 40.5 20.5 40.5C29.7571 40.5 37.5453 34.2109 39.8248 25.6723Z"
            fill="url(#paint0_linear_340_75)"
          />
          <defs>
            <linearGradient id="paint0_linear_340_75" x1="36.5" y1="43.7" x2="-3.23321" y2="36.0931" gradientUnits="userSpaceOnUse">
              <stop stop-color="#5D50C6" />
              <stop offset="1" stop-color="#F85E9F" />
            </linearGradient>
          </defs>
        </svg>

        <a class="navbar-brand nav-link text-dark fw-bold" href="#">E-Tourism</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto"></div>
        </div>
      </div>
    </nav>

    <div class="register_form_cont col-md-4">
      <div class="register_form">
        <h3>Registrasi</h3>

        <form action="register_p.php" method="post" class="main_form">

          <label>Username</label><br /><br />
          <input type="text" name="username" id="" /><br />
          <br />

          <label>Password</label><br />
          <br />
          <input type="password" name="password" id="" /><br /><br />

          <label>Konfirmasi Password</label><br />
          <br />
          <input type="password" name="konfirmasi_password" id="" />

          <div class="button_register_cont">
            <input class="signin" type="submit" value="Registrasi" />

            <p>Sudah punya akun? <a href="../Login_Page/Login.php">Login disini</a></p>
          </div>
        </form>
      </div>
    </div>

    <div class="pict_cont col-md-8">
      <svg class="pict_wave" width="317" height="982" viewBox="0 0 317 982" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M30.0145 -137.98L81.4815 -106.917C134.947 -74.2955 169.676 -34.6335 190.34 27.4411C211.777 89.5101 177.587 172.603 116.623 235.268C54.8876 297.939 -17.4084 384.568 16.9031 446.544C51.7296 508.516 106.305 556.326 166.221 619.838C191.338 646.464 220.562 733.205 166.037 795.823C118.5 865.5 88 918.5 31.5 959L0.869634 981.741L316.918 981.741L316.693 950.631C316.468 919.52 316.017 857.299 315.567 795.078C315.117 732.858 314.666 670.636 314.216 608.415C313.766 546.195 313.316 483.974 312.865 421.753C312.415 359.532 311.965 297.311 311.514 235.09C311.064 172.869 310.614 110.648 310.163 48.4275C309.713 -13.7934 309.263 -76.0144 309.037 -107.125L309.07 -138.236L30.0145 -137.98Z"
          fill="white"
        />
      </svg>
      <img src="Pict\1.png" alt="Gambar Rusak" srcset="" class="pict_main" id="sliderImage"/>
    </div>
  </body>
  <script>
    var images = ['Pict/1.png', 'Pict/2.png', 'Pict/3.png'];
    var currentIndex = 0;

    function changeImage() {
        var currentImage = document.getElementById('sliderImage');
        currentImage.classList.add('hidden'); // Menyembunyikan gambar

        // Ganti gambar ke gambar berikutnya
        currentIndex = (currentIndex + 1) % images.length;
        currentImage.src = images[currentIndex];

        // Menampilkan kembali gambar setelah sedikit waktu
        setTimeout(function() {
            currentImage.classList.remove('hidden');
        }, 50);
    }

    setInterval(changeImage, 3000);
</script>
</html>

<?php mysqli_close($conn); ?>
