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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
  <div>

    <div style= "width:20%; display: inline-block; margin : 2%">
      <div class="small-box bg-info">
        <div class="inner">
          <?php
        $result = mysqli_query($conn, "SELECT COUNT(*) as total_rows FROM `booking_history`;");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
          <h3><?php echo $row['total_rows'] ?></h3>
<?php } ?>
          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      
    </div>
    <div style= "width:20% ;display: inline-block; margin : 2%">
      <div class="small-box bg-info">
        <div class="inner">
        <?php
        $result = mysqli_query($conn, "SELECT COUNT(*) as total_rows FROM `bookingdestinasi`;");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
          <h3><?php echo $row['total_rows'] ?></h3>
<?php }?>
          <p>Booking Destinasi</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="bookingshow.php" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      
    </div>
    <div style= "width:20% ;display: inline-block; margin : 2%">
      <div class="small-box bg-info">
        <div class="inner">
        <?php
        $result = mysqli_query($conn, "SELECT COUNT(*) as total_rows FROM `destinasiwisata`;");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
          <h3><?php echo $row['total_rows'] ?></h3>
<?php }?>
          <p>Blog Destinasi</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="blogshow.php" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      
    </div>
    <div style= "width:20% ;display: inline-block; margin : 2%">
      <div class="small-box bg-info">
        <div class="inner">
        <?php
        $result = mysqli_query($conn, "SELECT COUNT(*) as total_rows FROM `admin`;");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
          <h3><?php echo $row['total_rows'] ?></h3>
<?php }?>
          <p>User</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>
      
    </div>
  </div>
         

  <div>
    <canvas id="myChart"></canvas>
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
   const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Wisata', 'Kuliner', 'Akomodasi', 'Transportasi'],
    datasets: [{
      label: 'Jenis Destinasi IKN',
      data: [12, 19, 3, 5],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
    
</body>
</html>
<?php 
}else{
  header("location:../Login_Page/Login.php");
}

mysqli_close($conn); ?>