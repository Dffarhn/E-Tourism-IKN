<?php 
session_start();
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
    <link rel="stylesheet" href="styledestinasiiid.css" />
    <link rel="stylesheet" href="../asset/css card/image_card.css">
  </head>
  <body>
    <?php 
    include "../Navbar/navbarmain.php";
    ?>

    <div class="gretting_cont  d-flex">
        <div class="col-md-1 mt-5" >
        </div>
        <div class="col-md-9 mt-5 row justify-content-center text-center" >
            <h1 class="gretting_word">Cari Destinasi Wisata Terdekat, Terpopuler, Terbaik dari sini</h1>
        </div>
        <div class="col-md-1 mt-5" >
        </div>
    </div>


    <div class="destinasi_container mt-5 px-5" id="wisata">
        <div>
            <h3>Saatnya jelajah wisata!</h3>

        </div>
    </div>

    <div class="Jelajah_container px-5 mt-5">
        <div class="row mt-5 justify-content-center">
<?php
        $result2 = mysqli_query($conn, "SELECT * FROM `bookingdestinasi` b JOIN jeniswisata w on (b.id_jenis=w.id_jenis) WHERE w.nama_jenis = 'Wisata' ORDER BY RAND() LIMIT 6;");
while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC))
{
  $whichbooking = $row['id_booking'];
?>
          <div class="col-md-4 mb-3">
          <a href="../Show_Page/showpage.php?id_booking=<?php echo $row['id_booking']; ?>" style="text-decoration: none; color: inherit;">
            <div class="card card_show">
              <img src="../asset/pict/<?php echo $row['gambar']?>" class="card-img-top card_gambar" alt="Project 1">
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
                <?php
        $result_testi = mysqli_query($conn, "SELECT id_booking, CEIL(AVG(rating)) AS rata_rata_rating FROM testimoni WHERE id_booking = $whichbooking GROUP BY id_booking;");
while($row10 = mysqli_fetch_array($result_testi, MYSQLI_ASSOC))
{
?>
                <h4 class="card-text border-0 px-0 price_liburan" style="display: inline-block;"> 
                <?php echo $row10['rata_rata_rating']; ?>
                  <svg width="22" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.9189 12.3194C15.6599 12.5704 15.5409 12.9334 15.5999 13.2894L16.4889 18.2094C16.5639 18.6264 16.3879 19.0484 16.0389 19.2894C15.6969 19.5394 15.2419 19.5694 14.8689 19.3694L10.4399 17.0594C10.2859 16.9774 10.1149 16.9334 9.93989 16.9284H9.66889C9.57489 16.9424 9.48289 16.9724 9.39889 17.0184L4.96888 19.3394C4.74988 19.4494 4.50188 19.4884 4.25888 19.4494C3.66688 19.3374 3.27188 18.7734 3.36888 18.1784L4.25888 13.2584C4.31788 12.8994 4.19888 12.5344 3.93988 12.2794L0.328876 8.77937C0.0268757 8.48637 -0.0781242 8.04637 0.0598758 7.64939C0.193876 7.25339 0.535876 6.96439 0.948876 6.89939L5.91888 6.17839C6.29688 6.13939 6.62888 5.90939 6.79888 5.56939L8.98889 1.07939C9.04089 0.97939 9.10789 0.88739 9.18889 0.80939L9.27889 0.73939C9.32589 0.68739 9.37988 0.64439 9.43989 0.60939L9.54889 0.56939L9.71889 0.49939H10.1399C10.5159 0.53839 10.8469 0.76339 11.0199 1.09939L13.2389 5.56939C13.3989 5.89639 13.7099 6.12339 14.0689 6.17839L19.0389 6.89939C19.4589 6.95939 19.8099 7.24939 19.9489 7.64939C20.0799 8.05037 19.9669 8.49037 19.6589 8.77937L15.9189 12.3194Z" fill="#FF5722"/>
                    </svg>
                </h4>
                <?php } 
                
                if (isset($_SESSION['admin']))
{?>
                <a href="../CRUD_konten/CARTproses.php?id_booking=<?php echo $row['id_booking']; ?>">
                  <button>Add cart</button>

                </a>
                <?php }?>
              </div>
            </div>
          </a>
          </div>

<?php }
?>
        </div>
    </div>


    <div class="layanan_destinasi mt-5 px-5">
      <div>
        <h3>Pilih Layanan Destinasi</h3>
        <p>Pilih Salah Satu Layanan Terpopuler Di IKN Nusantara</p>
      </div>

      <div class="row mt-5 justify-content-center">
        <div class="col-md-3 mb-3">
          <div class="card border-top-0 text-center">
            <img src="pict/destinasi1.png" class="card-img-top foto_destinasi" alt="Project 1">
           
                <h5 class="card-title jenis_destinasi position-absolute w-100" style="top: 50%; transform: translateY(-50%); ">Kuliner</h5>
  
        </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card border-top-0 text-center">
            <img src="pict/destinasi2.png" class="card-img-top" alt="Project 2">
            
              <h5 class="card-title jenis_destinasi position-absolute w-100" style="top: 50%; transform: translateY(-50%); ">Transportasi</h5>
          
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card border-top-0 text-center">
            <img src="pict/destinasi3.png" class="card-img-top" alt="Project 3">
            
              <h5 class="card-title jenis_destinasi position-absolute w-100" style="top: 50%; transform: translateY(-50%); ">Wisata</h5>
          
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card border-top-0 text-center">
            <img src="pict/destinasi4.png" class="card-img-top" alt="Project 3">
            
              <h5 class="card-title jenis_destinasi position-absolute w-100" style="top: 50%; transform: translateY(-50%); ">Akomodasi</h5>
 
          </div>
        </div>
      </div>


    </div>


    
    <div class="destinasi_container mt-5 px-5">
      <div>
          <h3>Ngeuliner Asik IKN Nusantara</h3>
          <p>Rasakan kenikmatan kuliner khas IKN nusantara</p>

      </div>

    </div>

    <div class="Jelajah_container px-5 mt-5" id="kuliner">
      <div class="row mt-5 justify-content-center">
      <?php
        $result_makanan = mysqli_query($conn, "SELECT * FROM `destinasiwisata` b JOIN jeniswisata w on (b.id_jenis=w.id_jenis) WHERE w.nama_jenis = 'Kuliner' ORDER BY RAND() LIMIT 3;");
while($row = mysqli_fetch_array($result_makanan, MYSQLI_ASSOC))
{
?>
  
        <div class="col-md-4 mb-3">
        <a href="../Blog_Page/blog.php?id_blog=<?php echo $row['id_destinasi']; ?>" style="text-decoration: none; color: inherit;">
          <div class="card card_show">
            <img src="../asset/pict/<?php echo $row['gambar']?>" class="card-img-top card_gambar" alt="Project 1">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['judul'] ?></h3>
              <p class="card-text deskripsi_liburan"><?php $deskripsi= $row['deskripsi']; 
                $words = str_word_count($deskripsi, 1);

                // Mengambil 50 kata pertama  
                $limitedDescription = implode(' ', array_slice($words, 0, 25));

                echo $limitedDescription." ...";
                ?></p></p>

              <!-- <h4 class="card-text border-0 px-0 lokasi_makan"> 
                <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 9.5C6.33696 9.5 5.70107 9.23661 5.23223 8.76777C4.76339 8.29893 4.5 7.66304 4.5 7C4.5 6.33696 4.76339 5.70107 5.23223 5.23223C5.70107 4.76339 6.33696 4.5 7 4.5C7.66304 4.5 8.29893 4.76339 8.76777 5.23223C9.23661 5.70107 9.5 6.33696 9.5 7C9.5 7.3283 9.43534 7.65339 9.3097 7.95671C9.18406 8.26002 8.99991 8.53562 8.76777 8.76777C8.53562 8.99991 8.26002 9.18406 7.95671 9.3097C7.65339 9.43534 7.3283 9.5 7 9.5ZM7 0C5.14348 0 3.36301 0.737498 2.05025 2.05025C0.737498 3.36301 0 5.14348 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 5.14348 13.2625 3.36301 11.9497 2.05025C10.637 0.737498 8.85652 0 7 0Z" fill="#FF5722"/>
                  </svg>

              <p>Padang, Sumatera Barat</p>
                  
              </h4> -->
              <h4 class="card-text border-0 px-0"> 
                4.5
                <svg width="22" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.9189 12.3194C15.6599 12.5704 15.5409 12.9334 15.5999 13.2894L16.4889 18.2094C16.5639 18.6264 16.3879 19.0484 16.0389 19.2894C15.6969 19.5394 15.2419 19.5694 14.8689 19.3694L10.4399 17.0594C10.2859 16.9774 10.1149 16.9334 9.93989 16.9284H9.66889C9.57489 16.9424 9.48289 16.9724 9.39889 17.0184L4.96888 19.3394C4.74988 19.4494 4.50188 19.4884 4.25888 19.4494C3.66688 19.3374 3.27188 18.7734 3.36888 18.1784L4.25888 13.2584C4.31788 12.8994 4.19888 12.5344 3.93988 12.2794L0.328876 8.77937C0.0268757 8.48637 -0.0781242 8.04637 0.0598758 7.64939C0.193876 7.25339 0.535876 6.96439 0.948876 6.89939L5.91888 6.17839C6.29688 6.13939 6.62888 5.90939 6.79888 5.56939L8.98889 1.07939C9.04089 0.97939 9.10789 0.88739 9.18889 0.80939L9.27889 0.73939C9.32589 0.68739 9.37988 0.64439 9.43989 0.60939L9.54889 0.56939L9.71889 0.49939H10.1399C10.5159 0.53839 10.8469 0.76339 11.0199 1.09939L13.2389 5.56939C13.3989 5.89639 13.7099 6.12339 14.0689 6.17839L19.0389 6.89939C19.4589 6.95939 19.8099 7.24939 19.9489 7.64939C20.0799 8.05037 19.9669 8.49037 19.6589 8.77937L15.9189 12.3194Z" fill="#FF5722"/>
                  </svg>
              </h4>
            </div>
          </div>
        </a>
        </div>
<?php }
?>
      </div>
    </div>
    
        


    <div class="row mt-5 justify-content-center transportasi_container px-5" id="transportasi">
      <div class="col-md-2 mb-3">
        
      </div>
      <div class="col-md-8 mb-3 text-center judul">
        <img src="/Destinasi Page/pict/transportasi_section.png" alt="" srcset="">

        <h3>Cari Transportasi Terbaik Untukmu</h3>
        <p>Pilih salah satu Layanan  terpopuler di ikn nusantara</p>

        <div class="choose_transportasi_container">
          <h4>
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M30.2501 25.9999C30.6258 25.9999 30.9862 26.1492 31.2518 26.4148C31.5175 26.6805 31.6668 27.0409 31.6668 27.4166C31.6668 27.7923 31.5175 28.1526 31.2518 28.4183C30.9862 28.684 30.6258 28.8333 30.2501 28.8333H3.33342C2.9577 28.8333 2.59737 28.684 2.33169 28.4183C2.06601 28.1526 1.91676 27.7923 1.91676 27.4166C1.91676 27.0409 2.06601 26.6805 2.33169 26.4148C2.59737 26.1492 2.9577 25.9999 3.33342 25.9999H30.2501ZM17.5001 7.58325C22.0674 7.58325 25.9179 9.10617 28.6464 11.251C31.3253 13.3562 33.0834 16.2037 33.0834 18.9166C33.0834 20.1094 32.7179 21.1266 32.0733 21.9483C31.4458 22.7501 30.6085 23.2941 29.7557 23.6681C28.0755 24.4019 26.0766 24.5833 24.5834 24.5833H4.74159C4.36996 24.5831 4.00202 24.5096 3.65883 24.367C3.31563 24.2245 3.00392 24.0156 2.74154 23.7525C2.47915 23.4893 2.27125 23.1769 2.12972 22.8333C1.98819 22.4897 1.91583 22.1215 1.91676 21.7499V10.4166C1.91676 8.85684 3.17759 7.58325 4.74726 7.58325H17.5001ZM10.4168 10.4166H4.75009V14.6666H10.4168V10.4166ZM17.5001 10.4166H13.2501V14.6666H18.9168V10.4733C18.6047 10.448 18.2919 10.4315 17.9789 10.4237L17.5001 10.4166ZM21.7501 10.9592V14.6666H28.1973C27.794 14.238 27.3588 13.8407 26.8954 13.478C25.5326 12.407 23.7929 11.5018 21.7501 10.9592Z" fill="#2C8900"/>
            </svg>
              
            Kereta</h4>
          <h4>
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M22.8323 6.16675C23.6214 6.16677 24.395 6.38652 25.0663 6.80137C25.7376 7.21622 26.2802 7.80979 26.6332 8.51558L28.5967 12.4412C28.9423 12.2995 29.2823 12.1465 29.6167 11.9822C29.9529 11.8142 30.3422 11.7867 30.6987 11.9058C31.0552 12.0248 31.3499 12.2806 31.5178 12.6168C31.6858 12.9531 31.7133 13.3423 31.5942 13.6989C31.4752 14.0554 31.2194 14.3501 30.8832 14.518C30.5427 14.6696 30.2003 14.8169 29.8561 14.96L31.2175 17.6842C31.513 18.2749 31.6668 18.9264 31.6666 19.5868V23.1667C31.6675 23.7648 31.5417 24.3563 31.2975 24.9023C31.0533 25.4483 30.6963 25.9364 30.2499 26.3344V28.1251C30.2499 28.6887 30.026 29.2292 29.6275 29.6277C29.229 30.0262 28.6885 30.2501 28.1249 30.2501C27.5613 30.2501 27.0208 30.0262 26.6223 29.6277C26.2238 29.2292 25.9999 28.6887 25.9999 28.1251V27.4167H8.99992V28.1251C8.99992 28.6887 8.77604 29.2292 8.37752 29.6277C7.97901 30.0262 7.4385 30.2501 6.87492 30.2501C6.31133 30.2501 5.77083 30.0262 5.37232 29.6277C4.9738 29.2292 4.74992 28.6887 4.74992 28.1251V26.3344C3.88009 25.5552 3.33325 24.4247 3.33325 23.1667V19.5854C3.33352 18.9259 3.48727 18.2755 3.78234 17.6857L5.13242 14.9827C4.791 14.8382 4.45242 14.6852 4.1195 14.5194C3.78493 14.3493 3.53061 14.0545 3.41136 13.6986C3.29211 13.3427 3.31748 12.9542 3.482 12.6168C3.5651 12.4503 3.68021 12.3017 3.82075 12.1797C3.96129 12.0576 4.1245 11.9645 4.30106 11.9055C4.47762 11.8466 4.66407 11.823 4.84974 11.8362C5.03542 11.8493 5.21668 11.8989 5.38317 11.9822C5.7175 12.1479 6.05892 12.2995 6.40317 12.4412L8.36667 8.517C8.71949 7.81094 9.26196 7.21708 9.93329 6.80197C10.6046 6.38686 11.3783 6.16691 12.1676 6.16675H22.8323ZM11.1249 18.9167C10.5613 18.9167 10.0208 19.1406 9.62232 19.5391C9.2238 19.9377 8.99992 20.4782 8.99992 21.0417C8.99992 21.6053 9.2238 22.1458 9.62232 22.5444C10.0208 22.9429 10.5613 23.1667 11.1249 23.1667C11.6885 23.1667 12.229 22.9429 12.6275 22.5444C13.026 22.1458 13.2499 21.6053 13.2499 21.0417C13.2499 20.4782 13.026 19.9377 12.6275 19.5391C12.229 19.1406 11.6885 18.9167 11.1249 18.9167ZM23.8749 18.9167C23.3113 18.9167 22.7708 19.1406 22.3723 19.5391C21.9738 19.9377 21.7499 20.4782 21.7499 21.0417C21.7499 21.6053 21.9738 22.1458 22.3723 22.5444C22.7708 22.9429 23.3113 23.1667 23.8749 23.1667C24.4385 23.1667 24.979 22.9429 25.3775 22.5444C25.776 22.1458 25.9999 21.6053 25.9999 21.0417C25.9999 20.4782 25.776 19.9377 25.3775 19.5391C24.979 19.1406 24.4385 18.9167 23.8749 18.9167ZM22.8323 9.00008H12.1676C11.9344 9.00005 11.7048 9.05757 11.4992 9.16754C11.2936 9.27751 11.1183 9.43653 10.9889 9.6305L10.9011 9.7835L9.10192 13.379C11.2949 14.0363 14.2501 14.6667 17.4999 14.6667C20.5344 14.6667 23.3097 14.1171 25.4474 13.5093L25.8965 13.379L24.0988 9.7835C23.9945 9.57499 23.8404 9.39543 23.6501 9.26074C23.4598 9.12606 23.2392 9.04042 23.0079 9.01141L22.8337 9.00008H22.8323Z" fill="#2C8900"/>
              </svg>
              Mobil</h4>
          <h4>
            <svg width="24" height="28" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.5001 13.0833H3.50008V5.99992H20.5001M18.3751 21.5833C17.8115 21.5833 17.271 21.3594 16.8725 20.9609C16.474 20.5623 16.2501 20.0218 16.2501 19.4583C16.2501 18.8947 16.474 18.3542 16.8725 17.9556C17.271 17.5571 17.8115 17.3333 18.3751 17.3333C18.9387 17.3333 19.4792 17.5571 19.8777 17.9556C20.2762 18.3542 20.5001 18.8947 20.5001 19.4583C20.5001 20.0218 20.2762 20.5623 19.8777 20.9609C19.4792 21.3594 18.9387 21.5833 18.3751 21.5833ZM5.62508 21.5833C5.0615 21.5833 4.52099 21.3594 4.12248 20.9609C3.72396 20.5623 3.50008 20.0218 3.50008 19.4583C3.50008 18.8947 3.72396 18.3542 4.12248 17.9556C4.52099 17.5571 5.0615 17.3333 5.62508 17.3333C6.18867 17.3333 6.72917 17.5571 7.12768 17.9556C7.5262 18.3542 7.75008 18.8947 7.75008 19.4583C7.75008 20.0218 7.5262 20.5623 7.12768 20.9609C6.72917 21.3594 6.18867 21.5833 5.62508 21.5833ZM0.666748 20.1666C0.666748 21.4133 1.21925 22.5324 2.08341 23.3116V25.8333C2.08341 26.209 2.23267 26.5693 2.49835 26.835C2.76402 27.1007 3.12436 27.2499 3.50008 27.2499H4.91675C5.29247 27.2499 5.65281 27.1007 5.91848 26.835C6.18416 26.5693 6.33341 26.209 6.33341 25.8333V24.4166H17.6667V25.8333C17.6667 26.209 17.816 26.5693 18.0817 26.835C18.3474 27.1007 18.7077 27.2499 19.0834 27.2499H20.5001C20.8758 27.2499 21.2361 27.1007 21.5018 26.835C21.7675 26.5693 21.9167 26.209 21.9167 25.8333V23.3116C22.7809 22.5324 23.3334 21.4133 23.3334 20.1666V5.99992C23.3334 1.04159 18.2617 0.333252 12.0001 0.333252C5.73841 0.333252 0.666748 1.04159 0.666748 5.99992V20.1666Z" fill="#2C8900"/>
              </svg>
              Bus</h4>
          <h4>
            <svg width="34" height="35" viewBox="0 0 34 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.3872 20.7372L14.5139 25.0722L15.2619 28.5048L11.7372 32.0294L8.18561 26.4747L2.63086 22.9231L6.15553 19.3984L9.77511 20.3334L13.9217 15.2717L5.17944 9.4435L9.18578 5.43575L20.1168 9.08084L25.4902 3.70742C27.1491 2.04709 29.7189 1.92525 31.2277 3.434C32.7364 4.94275 32.6132 7.51117 30.9543 9.1715L25.5809 14.5449L29.2231 25.4717L25.2168 29.4794L19.3872 20.7372Z" fill="#2C8900"/>
              </svg>
              Pesawat</h4>
          <h4>
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_336_379)">
              <path d="M15.375 2.62505C14.6684 2.62505 14.1 3.3356 14.1 4.2188C14.1 5.102 14.6684 5.81255 15.375 5.81255H18.4403L19.3116 7.82466L14.1 13.25L11.6934 10.2418C11.0559 9.44497 10.19 9.00005 9.28687 9.00005H3.9C2.95969 9.00005 2.2 9.94966 2.2 11.125V13.25H7.3C11.9963 13.25 15.8 18.0047 15.8 23.875C15.8 24.6055 15.7416 25.3161 15.63 26H19.37C19.2584 25.3161 19.2 24.6055 19.2 23.875C19.2 20.4086 20.5281 17.3274 22.5841 15.3883L23.4022 17.2875C21.8775 18.8481 20.9 21.2188 20.9 23.875C20.9 28.57 23.9441 32.375 27.7 32.375C31.4559 32.375 34.5 28.57 34.5 23.875C34.5 19.1801 31.4559 15.375 27.7 15.375C26.9828 15.375 26.2922 15.5145 25.6441 15.7735L22.7169 9.00005H26C26.9403 9.00005 27.7 8.05044 27.7 6.87505V4.75005C27.7 3.57466 26.9403 2.62505 26 2.62505H24.9163C24.5178 2.62505 24.1353 2.79771 23.8272 3.11646L21.3091 5.7395L20.5653 4.01294C20.1934 3.1563 19.4762 2.61841 18.6953 2.61841H15.375V2.62505ZM25.0809 21.1657L26.5791 24.6321C26.9137 25.409 27.6894 25.6946 28.3056 25.2762C28.9219 24.8579 29.1556 23.8883 28.8209 23.118L27.3228 19.6516C27.445 19.6317 27.5725 19.625 27.7 19.625C29.5753 19.625 31.1 21.5309 31.1 23.875C31.1 26.2192 29.5753 28.125 27.7 28.125C25.8247 28.125 24.3 26.2192 24.3 23.875C24.3 22.8458 24.5922 21.9028 25.0809 21.1657ZM10.4503 25.4688C9.94563 27.0293 8.72375 28.125 7.3 28.125C5.42469 28.125 3.9 26.2192 3.9 23.875C3.9 21.5309 5.42469 19.625 7.3 19.625C8.72906 19.625 9.95094 20.7208 10.4503 22.2813H13.9778C13.3828 18.35 10.6203 15.375 7.3 15.375C3.54406 15.375 0.5 19.1801 0.5 23.875C0.5 28.57 3.54406 32.375 7.3 32.375C10.6203 32.375 13.3828 29.4 13.9831 25.4688H10.4503ZM7.3 26C7.75087 26 8.18327 25.7762 8.50208 25.3777C8.82089 24.9791 9 24.4386 9 23.875C9 23.3115 8.82089 22.771 8.50208 22.3724C8.18327 21.9739 7.75087 21.75 7.3 21.75C6.84913 21.75 6.41673 21.9739 6.09792 22.3724C5.77911 22.771 5.6 23.3115 5.6 23.875C5.6 24.4386 5.77911 24.9791 6.09792 25.3777C6.41673 25.7762 6.84913 26 7.3 26Z" fill="#2C8900"/>
              </g>
              <defs>
              <clipPath id="clip0_336_379">
              <rect width="34" height="34" fill="white" transform="translate(0.5 0.5)"/>
              </clipPath>
              </defs>
              </svg>
            Motor</h4>
        </div>
     
      </div>
      <div class="col-md-2 mb-3">
        
      </div>
    </div>


    <div class="transportasi_option px-5 mt-5">
      <div class="row mt-5 justify-content-center">
      <?php
        $result_transportasi = mysqli_query($conn, "SELECT * FROM `bookingdestinasi` b JOIN jeniswisata w on (b.id_jenis=w.id_jenis) WHERE w.nama_jenis = 'Transportasi' ORDER BY RAND() LIMIT 3;");
        while($row3 = mysqli_fetch_array($result_transportasi, MYSQLI_ASSOC))
        {
        ?>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="../asset/pict/<?php echo $row3['gambar']?>" class="card-img-top card_gambar" alt="Project 1">
            <div class="card-body">
              <h3 class="card-title"> <?php echo $row3['judul'] ?></h3>

              <h4 class="card-text border-0 px-0 lokasi_makan"> 

                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.25 11.4375V8.75C6.25 7.375 7.375 6.25 8.75 6.25H21.25C22.625 6.25 23.75 7.375 23.75 8.75V11.45C22.3 11.9625 21.25 13.3375 21.25 14.9625V17.5H8.75V14.95C8.75 13.3375 7.7 11.95 6.25 11.4375ZM25 12.5C23.625 12.5 22.5 13.625 22.5 15V18.75H7.5V15C7.5 14.337 7.23661 13.7011 6.76777 13.2322C6.29893 12.7634 5.66304 12.5 5 12.5C4.33696 12.5 3.70107 12.7634 3.23223 13.2322C2.76339 13.7011 2.5 14.337 2.5 15V21.25C2.5 22.625 3.625 23.75 5 23.75V26.25H7.5V23.75H22.5V26.25H25V23.75C26.375 23.75 27.5 22.625 27.5 21.25V15C27.5 13.625 26.375 12.5 25 12.5Z" fill="#2C8900"/>
                  </svg>
                
              <p><?php $deskripsi= $row3['fasilitas']; 
                $words = str_word_count($deskripsi, 1);

                // Mengambil 50 kata pertama  
                $limitedDescription = implode(' ', array_slice($words, 0, 10));

                echo $limitedDescription." ..."; ?></p>
                  
              </h4>
              <h4 class="harga">
                <p>Rp. <?php
                  
                   

                  $harga_promo = $row3['harga_promo'];
                  $harga_promo_format = number_format($harga_promo, 0, ',', '.');
                  echo $harga_promo_format;
                  
                  
                  
                  ?></p>
              </h4>

              <a href="../Show_Page/showpage.php?id_booking=<?php echo $row3['id_booking']; ?>" style="text-decoration: none; color: inherit;">
              <button class="cek_tiket">Cek Tiket</button>
              </a>
              
            </div>
          </div>
        </div>
        <?php } ?>
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
