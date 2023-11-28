<?php 
session_start();

if (isset($_SESSION['admin_root']))
{

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
    <link rel="stylesheet" href="piw.css">
</head>
<body>
    <div class="row">
        <?php 
        include "../Navbar/navbaradmin.php" ;
        
        ?>

        </div>
        <div class="mb-3 mt-4 our_service_word" >
          <h2>DashBoard</h2>
          <section class="content mt-5 daftar_berita">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
      
      
      
      
      
                <div class="dashboard_menu">
                               <div class="card">
                                 <div class="card-header">
                                   <h3 class="card-title">Daftar Berita</h3>
                                 </div>
                                 <div class="card-body">
                                 <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                                       <th> NO</th>
                                       <th>JUDUL</th>
                                       <th> ISI</th>
                                       <th> KATEGORI</th>
                                       <th> AKSI</th>
                                     </tr>
                                   </thead>
                                   <tbody>
      
                           <?php
                          $nomor = 1;
                          $results = mysqli_query($conn, "SELECT d.*, w.nama_jenis FROM destinasiwisata d join jeniswisata w on (d.id_jenis=w.id_jenis) ORDER BY d.id_destinasi DESC;");
                          while($rows = mysqli_fetch_array($results, MYSQLI_ASSOC))
                          {
                          ?>
                                     <tr>
                                       <td><?php echo $nomor; ?></td>
                                       <td><?php echo $rows['judul'];?></td>
                                       <td><?php $deskripsi = $rows['deskripsi'];

                                            // Memisahkan kata-kata dalam deskripsi
                                                  $words = str_word_count($deskripsi, 1);

                                                  // Mengambil 50 kata pertama  
                                                  $limitedDescription = implode(' ', array_slice($words, 0, 50));

                                                  echo $limitedDescription." ...";
                                       
                                       
                                       ?></td>
                                       <td><?php echo $rows['nama_jenis'];?></td>
                                       <td>
                                        <a style="color: white;"href="">
                                            <button class="btn btn-primary btn-sm">

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
                                            </button>
                                          </a>
                                        </td>
                                     </tr>
                          <?php
                          $nomor = $nomor+1;
                          }
                          ?>
                                   </tbody>
                                 </table>
                               </div>
                               </div>
                             </div>
      
              </div>
              <!-- /.row -->
              <!-- Main row -->
              <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
          </section>

          
          <section class="content mt-5 daftar_booking">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
      
      
      
      
      
                <div class="dashboard_menu">
                               <div class="card">
                                 <div class="card-header">
                                   <h3 class="card-title">Daftar Booking</h3>
                                 </div>
                                 <div class="card-body">
                                 <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                     <tr>
                                       <th> NO</th>
                                       <th>JUDUL</th>
                                       <th> ISI</th>
                                       <th> KATEGORI</th>
                                       <th> AKSI</th>
                                     </tr>
                                   </thead>
                                   <tbody>
      
                           <?php
                          $nomor = 1;
                          $results = mysqli_query($conn, "SELECT d.*, w.nama_jenis FROM bookingdestinasi d join jeniswisata w on (d.id_jenis=w.id_jenis) ORDER BY d.id_booking DESC;");
                          while($rows = mysqli_fetch_array($results, MYSQLI_ASSOC))
                          {
                          ?>
                                     <tr>
                                       <td><?php echo $nomor; ?></td>
                                       <td><?php echo $rows['judul'];?></td>
                                       <td><?php $deskripsi = $rows['deskripsi'];

                                            // Memisahkan kata-kata dalam deskripsi
                                                  $words = str_word_count($deskripsi, 1);

                                                  // Mengambil 50 kata pertama  
                                                  $limitedDescription = implode(' ', array_slice($words, 0, 50));

                                                  echo $limitedDescription." ...";
                                       
                                       
                                       ?></td>
                                       <td><?php echo $rows['nama_jenis'];?></td>
                                       <td>
                                          <a style="color: white;"href="">
                                            <button class="btn btn-primary btn-sm">

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
                                            </button>
                                          </a>
                                        </td>
                                     </tr>
                          <?php
                          $nomor = $nomor+1;
                          }
                          ?>
                                   </tbody>
                                 </table>
                               </div>
                               </div>
                             </div>
      
              </div>
              <!-- /.row -->
              <!-- Main row -->
              <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
          </section>

          

        </div>

      </div>




<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
        "paging": true,
         "lengthChange": true,
         "searching": true,
         "ordering": true,
         "info": false,
         "autoWidth": false,
         "responsive": false,
         "scrollX": false,
         "buttons": ["copy", "csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
    
</body>
</html>
<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>