<?php
include '../admin.auth.php';
session_start(); 
include 'config.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
   
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style2.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
   <style>
    thead tr th {
      font-size: medium!important;
      white-space: nowrap!important;
    }
   </style>
</head>

<body>
<div class="container-scroller">

<?php include '../dashboardheader.php'; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper updated">

    

    
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon text-white me-2">
      <i class="mdi mdi-view-dashboard"></i>
    </span> 
    <span class="subtitle">Judges Details</span>
  </h3>

  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
      <button id="reloadButton" class="btn page-title-icon btn-sm text-white" onclick="window.location.href = 'grading.php' ;">Back</button>
      </li>
    </ul>
  </nav>
</div>
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <?php    
        $current_year=date('Y');
          $q_team = mysqli_query($conn,"select distinct id,first_name, last_name, category,judge_confirm from tbl_user where user_type='Judge' and judge_confirm='Y' and Year='$current_year' order by judge_confirm desc,first_name asc");
$num_of_rows=mysqli_num_rows($q_team);
        
        ?>
        <h4 class="card-title">Total : <?php echo $num_of_rows   ?></h4>
        <div class="table-responsive">
          <table class="table table1">
            <thead class="table-dark">
              <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Category</th>
                <th scope="col">Confirm Judge</th>
                <th>View Details</th>
              </tr>
            </thead>
            <tbody>

            <?php
          
            while ($r_team = mysqli_fetch_assoc($q_team)) {

            ?>

              <tr>
                <td><?php echo $r_team["first_name"]; ?></td>
                <td><?php echo $r_team["last_name"]; ?></td>
                <td><?php echo $r_team["category"]; ?></td>
                <td><?php echo $r_team["judge_confirm"]; ?></td>
                <td><a href="profile.php?id=<?php echo $r_team["id"]; ?>"><button type="button" style="margin:0px;" class="btn btn-success btn-gradient-success btn-sm text-sm" >View Details</button></a></td>
              </tr>

            <?php
            }
            ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>






       <!-- partial:partials/_footer.html -->
       <footer class="footer">

</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="../assets/vendors/js/vendor.bundle.base.js"></script>
<!-- <script src="./../assets/js/main.js"></script> -->
<!-- endinject -->
<!-- Plugin js for this page -->

<script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="../assets/js/off-canvas.js"></script>
<script src="../assets/js/hoverable-collapse.js"></script>
<script src="../assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="../assets/js/dashboard.js"></script>
<script src="../assets/js/todolist.js"></script>
<script src="../assets/js/ajaxscript.js" type = "text/javascript"></script>
<!-- End custom js for this page -->
</body>

</html>