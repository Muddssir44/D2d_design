<?php
include '../admin.auth.php';
include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dare to Design</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/emuinventlogo.jpg" rel="icon" type="image/jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">

    <!-- Libraries Stylesheet -->
    <!-- <link href="assets/lib/animate/animate.min.css" rel="stylesheet"> -->
    <link href="../../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../assets/css/style.css?v=2" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style2.css?v=1">

    <style>
        .event-carousel .owl-item {
            margin-top: 40px;
            margin-bottom: 40px;
            /* margin: 0 10px ; */
            /* margin-right: 0; */


        }

        .event-carousel .owl-item .icon-img {
            max-width: 100% !important;
            width: auto !important;
        }

        .event-carousel .owl-dots {
            text-align: center;
            /* Center the dots horizontally */
            /* Adjust the margin to control the space between items and dots */
        }

        /* Style the individual dot */
        .event-carousel .owl-dot {
            display: inline-block;
            margin: 0 5px;
            /* Adjust the margin between dots */
        }

        /* Style the active dot */
        .event-carousel .owl-dot {
            border: 1px solid green;
            /* Change the active dot's background color */
            border-radius: 50%;
            /* Make the dots circular */
            width: 10px;
            /* Adjust the width and height of the dots */
            height: 10px;
        }

        .add {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .add-icon i {
            font-size: 100px;
            font-weight: 5rem;
            color: green !important;
        }

        .add-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 200px;
            height: 200px;
            background-color: #fff;
            border: 2px solid #333;
            /* Add your preferred border styles */
            border-radius: 50%;
            /* Makes the button circular */
            text-decoration: none;
            color: #333;
            /* Text color for the plus icon */
            font-size: 24px;
            /* Adjust the size of the plus icon as needed */
            transition: all 0.3s;
            /* Add a smooth transition effect if desired */
        }

        .add-icon:hover {
            background-color: lightgrey;
            border: green solid 5px;
            /* Change background color on hover */
            color: #fff;
            /* Change text color on hover */
        }

        @media (min-width: 768px) {
            .mentor_image {

                height: 300px;
            }
        }
    </style>

</head>

<body>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
            <div class="modal-content bg-light p-3">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD EVENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form id="event_create" enctype="multipart/form-data">




                        <div class="form-group">
                            <label> <b>Event Name: </b> </label>
                            <input type="text" class="form-control form-control-sm " name="name" id="name" value="" required>
                        </div>
                        <div class="form-group ">
                            <label for="Type">Type</label>
                            <select class="form-select" id="SelectDepartment" name="Type" required>
                                <option value="">Select Type</option>
                                <option value="current">Current</option>
                                <option value="past">Past </option>

                            </select>
                        </div>


                        <div class="form-group">
                            <label> <b>Description</b> </label>
                            <input type="text" class="form-control form-control-sm " name="Description" id="Description" value="" required>
                            <span id="charCount">0/90</span><br><span class="charnote"></span>
                        </div>

                        <div class="form-group">
                            <label><b>Picture</b></label>
                            <input type="file" class="form-control" name="event_pic" id="event_pic" required>
                        </div>
                        <div class="form-group">
                            <label><b>Any Link</b></label>
                            <input type="text" class="form-control form-control-sm " name="link" id="link" value="">
                        </div>






                        <div id="alertBox"> </div>
                        <button type="submit" class="btn btn-success btn-sm" name="submit" id="submitBtn" disabled>Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
            <div class="modal-content bg-light p-3">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">ADD MENTOR</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="add_mentor" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email"><b>Mentor Name:</b></label>
                            <input type="text" class="form-control form-control-sm" name="mentor_name" id="name" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><b>Qualification:</b></label>
                            <input type="text" class="form-control form-control-sm" name="qualification" id="qualification" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="pwd"><b>Picture</b> <span class="text-danger">(428x522 pixels)</span>:</label>
                            <input type="file" class="form-control" name="mentor_pic" id="dp" required>
                        </div>

                        <div class="form-group">
                            <p class="text-muted">Image Dimensions: <span id="imageDimensions"></span></p>
                        </div>

                        <div id="alertBox"></div>
                        <button type="submit" class="btn btn-success btn-sm" name="submit" id="submitBtn2">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
            <div class="modal-content bg-light p-3">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">UPDATE INDEX PAGE CONTENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update_content" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label for="Type"><b>Row No</b></label>
                            <select class="form-select" id="SelectDepartment" name="row_no" required>
                                <option value="">Select Row</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Heading</b></label>
                            <input type="text" class="form-control form-control-sm" name="heading" id="heading" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><b>Subheading</b></label>
                            <input type="text" class="form-control form-control-sm" name="subheading" id="subheading" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Description</b></label>
                            <input type="text" class="form-control form-control-sm" name="Description" id="Description" value="" required>
                        </div>

                        <div class="form-group">
                            <label for="pwd"><b>Picture</b><span class="text-danger">(Square)</span></label>
                            <input type="file" class="form-control" name="picture" id="dp1" required>
                        </div>

                        <div class="form-group">
                            <p class="text-muted">Image Dimensions: <span id="imageDimensions"></span></p>
                        </div>

                        <div id="alertBox"></div>
                        <button type="submit" class="btn btn-success btn-sm" name="submit" id="submitBtn2">Submit</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container-scroller">

        <?php
        include '../dashboardheader.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper updated p-0">

                <div class="my-3 mt-5" style="
                 
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







                <!-- Service Start -->
                <div class="container-xxl pt-5"> 
                <div class="container">
                    <div class=" row  g-4 mb-5 justify-content-around ">
                        <div class="col-md-4 col-12  bg-light add py-3" data-wow-delay="0.5s" style="max-width: 300px;">



                            <div class=" mx-auto mb-3 " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <a class="add-icon" href="#">
                                    <i class="mdi mdi-plus text-primary"></i>
                                    <h6 class="py-1 ">ADD EVENT</h6>
                                </a>
                            </div>



                        </div>
                        <div class="col-md-4  col-12   bg-light add py-3 " style="max-width: 300px;">



                            <div class=" mx-auto  mb-3  " data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                                <a class="add-icon" href="#">
                                    <i class="mdi mdi-plus text-primary"></i>
                                    <h6 class="py-1 ">ADD MENTOR</h6>
                                </a>
                            </div>



                        </div>
                        <div class="col-md-4  col-12   bg-light add py-3 " style="max-width: 300px;">



                            <div class=" mx-auto  mb-1  " data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                                <a class="add-icon" href="#">
                                    <i class="mdi mdi-plus text-primary"></i>
                                    <h6 class="pb-2 ">Update Content</h6>
                                </a>
                            </div>



                        </div>
                    </div>
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                        <h1 class="display-5 mb-2">Current Events</h1>
                    </div>
                    <div class="owl-carousel event-carousel row  g-4 mb-5  ">


                        <?php

                        $query = mysqli_query($conn, "SELECT * FROM events WHERE type = 'current'");
                        $no_row = mysqli_num_rows($query);
                        if ($no_row > 0) {
                            while ($rows = mysqli_fetch_assoc($query)) {





                        ?>
                                <div class=" event-item wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item rounded d-flex h-100">
                                        <div class="service-img rounded">
                                            <img class="img-fluid" src="../../img/<?php echo $rows['picture']  ?>" alt="event">
                                        </div>
                                        <div class="service-text rounded p-3">
                                            <div class="btn-square rounded-circle mx-auto mb-3">
                                                <img class="img-fluid icon-img" src="../../img/icon/icon-3.png" alt="Icon">
                                            </div>
                                            <h4 class="mb-3"><?php echo $rows['event_name']  ?></h4>
                                            <p class="mb-4"><?php echo $rows['description']  ?></p>
                                            <?php if ($rows['link'] != '') {
                                                echo '<a class="btn btn-sm" href="' . $rows["link"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                            } else {
                                                echo '<a class="btn btn-sm" href="../../img/' . $rows["picture"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                            }  ?>
                                            <a class="btn btn-sm" href="./delete_content.php?eventid=<?php echo $rows["id"] ?>"><i class="fa fa-trash text-primary me-2"></i>Delete</a>

                                        </div>
                                    </div>
                                </div>
                            <?php   }  ?>
                    </div>

                <?php


                        } else {
                            echo '<div class=" mx-auto mb-3 " >
    
        
                           <h6 class="py-1 ">NO CURRENT EVENT</h6>
   
                        </div>';
                        }


                ?>





                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                    <h1 class="display-5 mb-2">Past Events</h1>
                </div>
                <div class="owl-carousel event-carousel row g-4 mb-5  ">

                    <?php

                    $query1 = mysqli_query($conn, "SELECT * FROM events WHERE type = 'past'");
                    $no_row1 = mysqli_num_rows($query1);
                    if ($no_row1 > 0) {
                        while ($rows1 = mysqli_fetch_assoc($query1)) {





                    ?>
                            <div class=" event-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="service-item rounded d-flex h-100">
                                    <div class="service-img rounded">
                                        <img class="img-fluid" src="../../img/<?php echo $rows1['picture']  ?>" alt="event">
                                    </div>
                                    <div class="service-text rounded p-3">
                                        <div class="btn-square rounded-circle mx-auto mb-3">
                                            <img class="img-fluid icon-img" src="../../img/icon/icon-3.png" alt="Icon">
                                        </div>
                                        <h4 class="mb-3"><?php echo $rows1['event_name']  ?></h4>
                                        <p class="mb-4"><?php echo $rows1['description']  ?></p>
                                        <?php if ($rows1['link'] != '') {
                                            echo '<a class="btn btn-sm" href="' . $rows1["link"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                        } else {
                                            echo '<a class="btn btn-sm" href="../../img/' . $rows1["picture"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                        }  ?>
                                        <a class="btn btn-sm" href="./delete_content.php?eventid=<?php echo $rows1["id"] ?>"><i class="fa fa-trash text-primary me-2"></i>Delete</a>

                                    </div>
                                </div>
                            </div>
                        <?php   }  ?>
                </div>

            <?php


                    } else {
                        echo '<div class=" mx-auto mb-3 " >
    

                                <h6 class="py-1 ">NO PAST EVENT</h6>

                        </div>';
                    }


            ?>



                </div>
                 </div>

                <!-- Service End -->








                <!-- Team Start -->
                <div class="container-xxl py-2">
                    <div class="container">
                        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">

                            <h1 class="display-5 mb-5">Dedicated & Experienced Mentors</h1>
                        </div>

                        <div class="owl-carousel mentor-carousel row g-4">

                            <?php

                            $query2 = mysqli_query($conn, "SELECT * FROM mentors_pic");
                            $no_row2 = mysqli_num_rows($query2);
                            if ($no_row2 > 0) {
                                while ($rows2 = mysqli_fetch_assoc($query2)) {

                            ?>
                                    <div class="owl-item mentor-item  wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="team-item rounded">
                                            <img class="img-fluid mentor_image" src="../../img/<?php echo $rows2['picture']  ?>" alt="">
                                            <div class="team-text">
                                                <h4 class="mb-0"><?php echo $rows2['mentor_name']  ?></h4>
                                                <p class="text-primary"><?php echo $rows2['qualification']  ?></p>
                                                <a href="./delete_content.php?mentorid=<?php echo  $rows2['id']  ?>"><i class="fa fa-trash"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>

                        </div>
                    <?php


                            } else {
                                echo '<div class=" mx-auto mb-3 " >


                                  <h6 class="py-1 ">NO MENTOR</h6>

                                </div>';
                            }


                    ?>


                    </div>
                </div>
                <!-- Team End -->


                <?php


                echo '

<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-3 bg-light text-success">
    <div class="container">
        <div class="row">
            <div class=" text-center   mb-md-0">
                <p>
                    Copyright &copy; 2019-
          
                    <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
                    made  by <a href="https://www.linkedin.com/in/syedhilal-hussain-035914205"
                      target="_blank" class="text-success">SyedHilalHussain</a>
                  </p>
            </div>
            
        </div>
    </div>
</div>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/lib/wow/wow.min.js"></script>
<script src="../../assets/lib/easing/easing.min.js"></script>
<script src="../../assets/lib/waypoints/waypoints.min.js"></script>
<script src="../../assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../../assets/lib/counterup/counterup.min.js"></script>
<script src="../../assets/lib/parallax/parallax.min.js"></script>
<script src="../../assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="../../assets/lib/lightbox/js/lightbox.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- Template Javascript -->
<script src="../../assets/js/main.js?v=6"></script>




'





                ?>


            </div>
        </div>
    </div>

    <script>
        const imageInput = document.getElementById("dp");
        const submitBtn = document.getElementById("submitBtn");
        const imageDimensions = document.getElementById("imageDimensions");

        imageInput.addEventListener("change", function() {
            const file = imageInput.files[0];

            // Check if a file is selected
            if (file) {
                const image = new Image();
                image.src = URL.createObjectURL(file);

                image.onload = function() {
                    // Check the image dimensions
                    if (image) {

                        imageDimensions.textContent = `${image.width}x${image.height} pixels`;
                    }
                };
            }
        });





        document.addEventListener("DOMContentLoaded", function() {
            const descriptionInput = document.getElementById("Description");
            const charCount = document.getElementById("charCount");
            const submitBtn = document.getElementById("submitBtn");
            const charNote = document.querySelector(".charnote");

            descriptionInput.addEventListener("input", function() {
                const charCountValue = descriptionInput.value.length;
                charCount.textContent = `${charCountValue}/90`;

                // Enable or disable the submit button based on character count
                if (charCountValue >= 90 && charCountValue <= 122) {
                    submitBtn.removeAttribute("disabled");
                    charCount.classList.remove("text-danger");
                    charNote.textContent = "Description is best";
                    charNote.style.color = "green";

                } else {
                    submitBtn.setAttribute("disabled", "disabled");
                    charCount.classList.add("text-danger");
                    charNote.textContent = "Description should be between 90 and 120 characters";
                    charNote.style.color = "red";
                }
            });
        });
    </script>
    <script src="../assets/js/ajaxscript.js?v=9" type="text/javascript"></script>
</body>

</html>