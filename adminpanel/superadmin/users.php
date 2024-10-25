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
 
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
   <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
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
 
  .table1 td{
    white-space: nowrap;
    border-bottom: 1px solid #ced4da;
    max-width:200px;
  }
</style>
</head>

<body>
  <div class="container-scroller">

    <?php include '../dashboardheader.php'; ?>
    <!-- partial -->
    <div class="main-panel">
      <div class="content-wrapper updated">

        <div class="page-header mb-3">
          <h3 class="page-title">
            <span class="page-title-icon text-white me-2">
              <i class="mdi mdi-view-dashboard"></i>
            </span>
            <span class="subtitle">Users</span>
          </h3>
          <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
      <button id="reloadButton" class="btn page-title-icon btn-sm text-white" onclick="window.history.back() ">Back</button>
          </li>
        </ul>
       </nav>
          

        </div>
        <div class="my-3 my-3" style="
                 
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 background-color: #f4f7ff;
                 overflow: hidden;">
            <div class="toast1 mt-5 ">

              <div class="toast1-content">
                <i class="mdi mdi-alert-circle-outline check"></i>

                <div class="message1">
                  <span class="text text-1"></span>
                  <span class="text text-2"></span>
                </div>
              </div>
              <i id="popup-close-btn" class="mdi mdi-close close"></i>

              <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
              <div id="progress1" class="progress1 "></div>
            </div>



          </div>
        <div class="row mt-4">
          <div class="col-12 grid-margin">
            <div class="card">
            <?php 
            $type=$_GET['type'];
                                  $q_team = mysqli_query($conn, "select * from tbl_user where user_type='$type' order by is_approved asc,id desc"); 
                                 $no_rows= mysqli_num_rows($q_team);
                                 $query = "SELECT DISTINCT Year
                                             FROM tbl_user
                                             ORDER BY Year DESC
                                             LIMIT 4";

                                   $result = mysqli_query($conn, $query);

                                             ?> 
                                 <div class="d-flex justify-content-between mx-2 mt-2 mb-0">
                                             <h4 class="card-title mt-1"><?php echo $_GET['type']  ?> Profiles For <span id="year_span">ALL .
                                                </span> </h4>

                                           <div class="d-flex justify-content-between">
                                             <label for="studentType " class="mt-1">Select Year:</label>
                                             <select name="year_change_user" id="year_change_user" class="form-select form-select-sm ms-3" style="width: fit-content;" >
                                              <option value="">select</option>
                                             <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                       <option value="<?php echo $row['Year']; ?>"><?php echo $row['Year']; ?></option>
                        <?php } ?>

                                             </select>
                                         </div>
                                         </div>
                                         <div class=" mx-2 mt-0" >Total: <span id="total"><?php echo $no_rows ?></span></div>
                            
              <div class="card-body pt-3">
                <?php
                if (isset($_GET['type']) && $_GET['type']=='Judge') {
                ?>
                  
                  <div class="table-responsive">

                    <table class="table user-table table1">
                      <thead class="bg-dark text-light ">
                        <tr>
                        <th scope="col" style="font-size:medium; white-space:nowrap;">S.No</th>
                          
                          <th scope="col" style="font-size:medium; white-space:nowrap;">First Name</th>
                          <th scope="col" style="font-size:medium; white-space:nowrap;">Last Name</th>
                          <th scope="col" style="font-size:medium; white-space:nowrap;">Email</th>
                          <!-- <th scope="col" style="font-size:medium; white-space:nowrap;">Phone</th> -->
                          <th scope="col" style="font-size:medium; white-space:nowrap;">Confirm</th>
                          <th scope="col" style="font-size:medium; white-space:nowrap;">Actions</th>
                        </tr>
                      </thead>

                      <tbody id="tbl_body2">

                        <?php

                        if ($_GET['type']) {

                          // $q_team = mysqli_query($conn, "select * from tbl_user where user_type='Student' order by is_approved asc,id desc");
$i=1;  //i for serial number

                          // loop for data fetching 
                          while ($r_team = mysqli_fetch_assoc($q_team)) {

                        ?>

                            <tr>
                              <td><?php echo $i ?></td>
                            <!-- <td><?php echo $r_team["Year"]; ?></td> -->
                              <td><?php echo $r_team["first_name"]; ?></td>
                              <td><?php echo $r_team["last_name"]; ?></td>
                              <td><?php echo $r_team["email"]; ?></td>
                              <!-- <td><?php echo $r_team["phone"]; ?></td> -->
                              <!-- <td><?php echo $r_team["user_type"]; ?></td> -->
                              <td><?php echo $r_team["judge_confirm"]; ?></a></td>

                              <!-- below is approval logic -->
                              <td>
                                <div class="btn-container">
                                  <?php
                                  if ($r_team["is_approved"] == 0) {
                                    echo '
                        <a onClick="return confirm(\'Do you want to approve the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="1"  >
                          <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" >Approve</button>
                        </a>
                        <a onClick="return confirm(\'Do you want to disapprove the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="0"  >
                          <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" onclick="edit(this)">Disapprove</button>
                        </a>
                      ';
                                  } else {
                                    echo '
                        <a onClick="return confirm(\'Do you want to disapprove the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="0"  >
                          <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" onclick="edit(this)">Disapprove</button>
                        </a>
                      ';
                                  }
                                  ?>
                                  <a onClick="return confirm('Are you sure you want to delete?')" href="#" class="btn mini purple delete-user-btn" data-id="<?php echo $r_team['id']; ?>" data-table="tbl_user" data-returns="users">
                                    <button type="button" style="margin:0px;" class="btn-gradient-danger btn-danger btn-sm">Delete</button>
                                  </a>
                                </div>
                              </td>
                            </tr>

                          <?php
                          
                          $i++;}
                        } 
                      
                      } else if (isset($_GET['type'])) {
                        ?>
                          
                          <div class="table-responsive">
        
                            <table class="table user-table table1">
                              <thead class="bg-dark text-light ">
                                <tr>
                                <th scope="col" style="font-size:medium; white-space:nowrap;">S.No</th>
                                  
                                  <th scope="col" style="font-size:medium; white-space:nowrap;">First Name</th>
                                  <th scope="col" style="font-size:medium; white-space:nowrap;">Last Name</th>
                                  <th scope="col" style="font-size:medium; white-space:nowrap;">Email</th>
                                  <!-- <th scope="col" style="font-size:medium; white-space:nowrap;">Phone</th> -->
                                  <th scope="col" style="font-size:medium; white-space:nowrap;">UserType</th>
                                  <th scope="col" style="font-size:medium; white-space:nowrap;">Actions</th>
                                </tr>
                              </thead>
        
                              <tbody id="tbl_body2">
        
                                <?php
        
                                if ($_GET['type']) {
        
                                  // $q_team = mysqli_query($conn, "select * from tbl_user where user_type='Student' order by is_approved asc,id desc");
        $i=1;  //i for serial number
        
                                  // loop for data fetching 
                                  while ($r_team = mysqli_fetch_assoc($q_team)) {
        
                                ?>
        
                                    <tr>
                                      <td><?php echo $i ?></td>
                                    <!-- <td><?php echo $r_team["Year"]; ?></td> -->
                                      <td><?php echo $r_team["first_name"]; ?></td>
                                      <td><?php echo $r_team["last_name"]; ?></td>
                                      <td><?php echo $r_team["email"]; ?></td>
                                      <!-- <td><?php echo $r_team["phone"]; ?></td> -->
                                      <td><?php echo $r_team["user_type"]; ?></td>
                                      <!--<td><?php echo $r_team["judge_confirm"]; ?></a></td>-->
        
                                      <!-- below is approval logic -->
                                      <td>
                                        <div class="btn-container">
                                          <?php
                                          if ($r_team["is_approved"] == 0) {
                                            echo '
                                <a onClick="return confirm(\'Do you want to approve the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="1"  >
                                  <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" >Approve</button>
                                </a>
                                <a onClick="return confirm(\'Do you want to disapprove the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="0"  >
                                  <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" onclick="edit(this)">Disapprove</button>
                                </a>
                              ';
                                          } else {
                                            echo '
                                <a onClick="return confirm(\'Do you want to disapprove the user?\')" href="#" class="btn mini purple approve-btn" data-id="' . $r_team['id'] . '" data-table="tbl_user" data-returns="users" data-flag="0"  >
                                  <button type="button" style="margin:0px;" class="btn-gradient-success btn-sm" onclick="edit(this)">Disapprove</button>
                                </a>
                              ';
                                          }
                                          ?>
                                          <a onClick="return confirm('Are you sure you want to delete?')" href="#" class="btn mini purple delete-user-btn" data-id="<?php echo $r_team['id']; ?>" data-table="tbl_user" data-returns="users">
                                            <button type="button" style="margin:0px;" class="btn-gradient-danger btn-danger btn-sm">Delete</button>
                                          </a>
                                        </div>
                                      </td>
                                    </tr>
        
                                  <?php
                                  
                                  $i++;}
                                } 
                              
                              } else {
                        echo "<div><h1>No Data To Show</h1></div>";
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
  <script src="../assets/js/ajaxscript.js?v=11" type="text/javascript"></script>
  <!-- End custom js for this page -->
</body>

</html>