<?php 

include "../database/koneksi.php";


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Admin Page E-tourism</title>
    <link rel="stylesheet" href="postbooking.css">
</head>
<body>
    <div class="row">
    <?php 
        include "../Navbar/navbaradmin.php" ;
        
    ?>


        </div>
        <div class="mb-3 mt-4 our_service_word" >
          <h2>Post Booking</h2>

          <form action="uploadbookingproses.php" method="post">
            <div class="row mt-4 justify-content-center px-4">
                <div class="col-md-6 mb-3">
                    <input name = "judul" type="text" placeholder="Judul">
                </div>
                <div class="col-md-6 mb-3 ">
                  <select name="jenis" id="" >
                    <option value="" disabled selected>Jenis</option>
                    <?php

                    $result_jenis = mysqli_query($conn, "SELECT * FROM `jeniswisata`;");
                    while($row = mysqli_fetch_array($result_jenis, MYSQLI_ASSOC))
                    {
                    ?>
                    <option value=<?php echo $row['id_jenis']?>><?php echo $row['nama_jenis']?></option>
                    <?php } ?>

                  </select>
                </div>
            </div>
            <div class="row mt-2 justify-content-center px-4">
                <div class="col-md-6 mb-3">
                    <input name="harga" type="text" placeholder="Harga">
                </div>
                <div class="col-md-6 mb-3 ">
                <input name="harga_promo" type="text" placeholder="Harga Promo">
                </div>
            </div>
            <div class="row mt-4 justify-content-center px-4">

                <div class="col-md-6 mb-3">
                    <label class="image_button">
                        <input type="file" style="display: none;" id="uploadImage" accept="image/*">
    
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 12V3.85L4.4 6.45L3 5L8 0L13 5L11.6 6.45L9 3.85V12H7ZM2 16C1.45 16 0.979002 15.804 0.587002 15.412C0.195002 15.02 -0.000664969 14.5493 1.69779e-06 14V11H2V14H14V11H16V14C16 14.55 15.804 15.021 15.412 15.413C15.02 15.805 14.5493 16.0007 14 16H2Z" fill="black"/>
                        </svg>
                            
                        
                        
                        Image
                    </label>

                    <input type="text" class="show_url_image" id="selected_image" name="image_url" style="width: 50%; padding: 1% 2%;" readonly>
                </div>
                <div class="col-md-6 mb-3 ">
                <input name="fasilitas" type="text" placeholder="Facilities">
                </div>
                
            </div>

            <div class="px-4 mb-3">

                <textarea name="deskripsi" id="" cols="30" rows="10" placeholder="Deskripsi"></textarea>

            </div>

            <div class="px-4 d-flex justify-content-end">
            <input type="submit" value = "Upload" class="upload_button"></input>

            </div>


            


          </form>

          

        </div>

      </div>


    
</body>
<script src="upimagebooking.js"></script>
</html>