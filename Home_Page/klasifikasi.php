<?php
include "../database/koneksi.php";

$query_pilihan = 'SELECT * FROM `bookingdestinasi` ORDER BY id_booking DESC LIMIT 6';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['query'])) {
    $query_pilihan = $_POST['query'];
}

$result2 = mysqli_query($conn, $query_pilihan);

while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
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
                <h4 class="card-text border-0 px-0 price_liburan"> 
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