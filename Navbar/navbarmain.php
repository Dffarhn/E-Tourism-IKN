<style>
    .navbar{
    background-color: rgb(255, 255, 255) !important;
    color: black !important;
    }

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    border: 1px solid black !important;
    background-color: rgb(224, 217, 217) !important;
    border-radius: 5px;
    }

</style>

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
            <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark me-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Destinasi
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../destinasi_page/destinasi.php#wisata">Wisata</a></li>
                        <li><a class="dropdown-item" href="../destinasi_page/destinasi.php#kuliner">Kuliner</a></li>
                        <li><a class="dropdown-item" href="../destinasi_page/destinasi.php#transportasi">Transportasi</a></li>
                        <li><a class="dropdown-item" href="#">Akomodasi</a></li>
                        <!-- Tambahkan destinasi lainnya sesuai kebutuhan -->
                    </ul>
                </div>
            <a class="nav-link text-dark me-5" href="#project"> FAQ </a>
            <a class="nav-link text-dark me-5" href="../profile_page/profile.php"> Profile </a>
            <?php

if (isset($_SESSION['admin']))
{
?>
            <a class="nav-link text-dark me-5" href="../Login_Page/logout.php"> Logout </a>

            <?php 
}else{?>
  <a class="nav-link text-dark me-5" href="../Login_Page/Login.php"> Login </a>
  <?php
} ?>
          </div>
        </div>
      
      </div>
</nav>