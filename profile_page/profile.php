<?php
include "../database/koneksi.php";
session_start();


if (isset($_SESSION['admin']))
{
  $profile_now = $_SESSION['admin'];
  $result = mysqli_query($conn, "SELECT * FROM `admin` WHERE `id_admin` = '$profile_now'");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
  
  // echo $_SESSION['admin'];

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
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient shadow-sm navbar sticky-top ">
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
    </nav> -->

    <?php 
    include "../Navbar/navbarmain.php"
    ?>
    <?php 
    include "../Navbar/navbarprofile.php"
    ?>

<div class="col-md-8 mt-5 px-5 content_profile">
  <div class="data_pribadi">
    <h3 id="judul">Data Pribadi</h3>
    
    <form action="updateprofile.php" method="post">
          <label for="">Username</label> <br>
          <input type="text" name="username" placeholder="Username" value="<?php echo $row['username'] ?>" readonly> <br>
  
          <label for="">No Handphone</label> <br>
          <input type="text" name="no_hp" placeholder="No Handphone" id="no_handphone" value="<?php echo $row['no_handphone'] ?>" readonly> <br>
  
          <label for="">Alamat Email</label> <br>
          <input type="text" name="email" placeholder="Alamat Email" id="alamat_email" value="<?php echo $row['email'] ?>"readonly> <br>
  
          <input type="submit" value="update" id="submitBtn" class="hidden cek_tiket">
          <input type="hidden" value ="<?php echo $row['id_admin'] ?>" name="id">
        </form>
  
          <button class= "cek_tiket" onclick="enableEdit()" id="editBtn">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                                <g clip-path="url(#clip0_585_346)"> 
                                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1305 3.15998C19.568 2.59756 18.805 2.28162 18.0095 2.28162C17.214 2.28162 16.4511 2.59756 15.8885 3.15998L15.1815 3.86798L20.1315 8.81798L20.8375 8.11098C21.1162 7.83239 21.3372 7.50165 21.488 7.13764C21.6388 6.77363 21.7164 6.38348 21.7164 5.98948C21.7164 5.59547 21.6388 5.20532 21.488 4.84131C21.3372 4.4773 21.1162 4.14656 20.8375 3.86798L20.1305 3.15998ZM18.7165 10.232L13.7665 5.28198L4.67654 14.373C4.47762 14.5719 4.33866 14.8228 4.27554 15.097L3.24654 19.552C3.2082 19.7174 3.21259 19.8898 3.25932 20.053C3.30604 20.2162 3.39355 20.3649 3.5136 20.4849C3.63365 20.605 3.78228 20.6925 3.9455 20.7392C4.10872 20.7859 4.28115 20.7903 4.44654 20.752L8.90254 19.724C9.17634 19.6607 9.42686 19.5217 9.62554 19.323L18.7165 10.232Z" fill="white"/>
                                                </g> 
                                                <defs> 
                                                  <clipPath id="clip0_585_346"> 
                                                    <rect width="24" height="24" fill="white"/> 
                                                  </clipPath> 
                                                </defs> 
          </svg>
          
          
          edit</button>
      </div>
  </div>

<script>
    function enableEdit() {
        // Mengaktifkan pengeditan pada kolom No Handphone dan Alamat Email
        document.getElementById("no_handphone").readOnly = false;
        document.getElementById("alamat_email").readOnly = false;
        document.getElementById("judul").innerText = "Edit Data Pribadi";

        // Menampilkan tombol "update"
        document.getElementById("submitBtn").classList.remove("hidden");

        document.getElementById("editBtn").classList.add("hidden");
    }
</script>
</html>

<?php 
} 
}else{
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
                      title: "Harus Login Dulu",
                      text: "Untuk melanjutkan harus login",
                      icon: "warning",
                      showCancelButton: true,
                      cancelButtonText: "Batal",
                      confirmButtonText: "Login",
                      reverseButtons: true
                  }).then(function(result) {
                      if (result.isConfirmed) {
                          window.location.href = "../Login_Page/Login.php";
                      } else {

                        window.history.back();
                      }
                  });
              </script>
          </body>
          </html>';
}

mysqli_close($conn); ?>
