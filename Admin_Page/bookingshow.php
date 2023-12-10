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
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
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
  <div style="width: 25%;">
    <a href="../PostBooking_page/postbooking.php" style="text-decoration: none; color: inherit;">
  <div class="info-box bg-gradient-warning">
  <span class="info-box-icon">
  <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_585_337)">
                        <path d="M15 3.00002C14.337 3.00002 13.7011 3.26341 13.2322 3.73225C12.7634 4.20109 12.5 4.83698 12.5 5.50002C12.5 6.16306 12.7634 6.79894 13.2322 7.26778C13.7011 7.73663 14.337 8.00002 15 8.00002C15.663 8.00002 16.2989 7.73663 16.7678 7.26778C17.2366 6.79894 17.5 6.16306 17.5 5.50002C17.5 4.83698 17.2366 4.20109 16.7678 3.73225C16.2989 3.26341 15.663 3.00002 15 3.00002ZM10.5 5.50002C10.4999 4.73407 10.6952 3.98076 11.0676 3.31142C11.44 2.64208 11.977 2.07886 12.6279 1.67511C13.2788 1.27136 14.022 1.04043 14.7871 1.00419C15.5522 0.967946 16.3139 1.1276 17 1.46802C17.6861 1.128 18.4476 0.968675 19.2124 1.00512C19.9773 1.04156 20.7201 1.27256 21.3708 1.67627C22.0214 2.07998 22.5583 2.64303 22.9306 3.31215C23.3029 3.98126 23.4982 4.73431 23.4982 5.50002C23.4982 6.26573 23.3029 7.01877 22.9306 7.68789C22.5583 8.35701 22.0214 8.92006 21.3708 9.32376C20.7201 9.72747 19.9773 9.95848 19.2124 9.99492C18.4476 10.0314 17.6861 9.87203 17 9.53202C16.3139 9.87244 15.5522 10.0321 14.7871 9.99585C14.022 9.95961 13.2788 9.72868 12.6279 9.32492C11.977 8.92117 11.44 8.35796 11.0676 7.68862C10.6952 7.01928 10.4999 6.26597 10.5 5.50002ZM18.75 7.98802C19.0976 8.02291 19.4487 7.98456 19.7806 7.87543C20.1124 7.76631 20.4178 7.58884 20.6769 7.35446C20.9359 7.12009 21.143 6.83401 21.2847 6.51469C21.4265 6.19536 21.4997 5.84988 21.4997 5.50052C21.4997 5.15116 21.4265 4.80567 21.2847 4.48635C21.143 4.16702 20.9359 3.88095 20.6769 3.64657C20.4178 3.4122 20.1124 3.23473 19.7806 3.1256C19.4487 3.01648 19.0976 2.97812 18.75 3.01302C19.2401 3.74976 19.5011 4.61514 19.5 5.50002C19.5013 6.38523 19.2403 7.25099 18.75 7.98802ZM8.935 13.25C8.77081 13.2496 8.60814 13.2815 8.45629 13.344C8.30444 13.4064 8.16638 13.4982 8.05 13.614L6 15.664V19.5H11.627L17.43 18.05L20.962 16.542C21.0823 16.477 21.1744 16.3699 21.2205 16.2411C21.2667 16.1124 21.2637 15.9712 21.2122 15.8445C21.1606 15.7179 21.0641 15.6147 20.9412 15.5548C20.8182 15.4949 20.6775 15.4825 20.546 15.52L20.526 15.525L14.114 17H10.5V15H13.625C13.8571 15 14.0796 14.9078 14.2437 14.7437C14.4078 14.5796 14.5 14.3571 14.5 14.125C14.5 13.893 14.4078 13.6704 14.2437 13.5063C14.0796 13.3422 13.8571 13.25 13.625 13.25H8.935ZM16.487 14.402L20.039 13.585C20.4173 13.4855 20.8134 13.4741 21.1968 13.5515C21.5802 13.629 21.9408 13.7932 22.2509 14.0317C22.5609 14.2702 22.8122 14.5766 22.9854 14.9274C23.1586 15.2781 23.2491 15.6638 23.25 16.055C23.2499 16.5299 23.1176 16.9954 22.8679 17.3994C22.6181 17.8033 22.2608 18.1297 21.836 18.342L21.809 18.356L18.069 19.951L11.873 21.5H0.5V14.25H4.586L6.638 12.198C6.94034 11.8967 7.29907 11.6579 7.6937 11.4952C8.08834 11.3326 8.51116 11.2493 8.938 11.25H13.625C14.0259 11.25 14.4225 11.3338 14.7891 11.4961C15.1557 11.6583 15.4843 11.8955 15.7539 12.1924C16.0234 12.4892 16.2278 12.8391 16.3541 13.2197C16.4804 13.6002 16.5256 14.0029 16.487 14.402ZM4 16.25H2.5V19.5H4V16.25Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_585_337">
                        <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                        </clipPath>
                        </defs>
                    </svg>
    
  
  <i class="far fa-copy"></i></span>
  <div class="info-box-content">
    <span class="info-box-text">Add Booking</span>
  </div>
</div>

  </div>
  </a>

          <section class="content mt-5 daftar_berita">
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
      
      
      
      
      
                <div class="dashboard_menu">
                               <div class="card">
                                 <div class="card-header">
                                   <h3 class="card-title">Daftar Blog</h3>
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
                                        <a style="color: white;"href="../Admin_Page/editproses.php?id_destinasi=<?php echo $rows['id_destinasi']; ?>">
                                            <button class="btn btn-success btn-sm">

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
                                          <a style="color: white;"href="../Admin_Page/editproses.php?id_booking=<?php echo $rows['id_booking']; ?>">
                                            <button class="btn btn-success btn-sm">

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