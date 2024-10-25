<?php include './adminpanel/superadmin/config.php'   ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dare to Design</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/emuinventlogo.jpg" rel="icon" type="image/jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <!-- <link href="assets/lib/animate/animate.min.css" rel="stylesheet"> -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css?v=5" rel="stylesheet">
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
    </style>

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php include  'header.php'; ?>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/slide4.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <h1 class="display-1 text-white mb-md-5 animated slideInDown">Invent, Explore, Excel</h1>
                                <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-4">More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-md-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 260px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fas fa-flask text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Unleash Innovation!</h4>
                                <span>Innovative program for students in grades 3-12. EMUiNVENT leads to Invention Convention Michigan.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 260px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fas fa-paint-brush text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Ignite Creativity</h4>
                                <span>EMUiNVENT fuels creative thinking across diverse disciplines, inspiring inventive solutions to real-world challenges.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 260px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fas fa-star text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Path to Excellence</h4>
                                <span>EMUiNVENT propels students towards Invention Convention Michigan, where exceptional inventors showcase their ideas and compete for prizes.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end mb-5">
                <div class="col-lg-3 col-md-5  my-0 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/about2.JPG" style="width:100%; height:100%;">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-3 text-primary mb-0">22nd March, 2024</h1>
                    <p class="text-primary mb-2">Regional Invention Convention competition</p>
                    <h1 class="display-5 mt-2 ">EMUiNVENT</h1>
                    <p class="mb-4  mt-3">Welcome to the exciting world of EMUiNVENT, an exceptional competition that offers students from grades 3 to 12 an interactive and interdisciplinary platform to showcase their innovations and compete with their peers. EMUiNVENT provides a unique opportunity for students to present their creativity and demonstrate their critical thinking skills and entrepreneurial mindset. By participating in this competition, students can make their mark and potentially qualify for the esteemed Invention Convention Michigan, a program organized by The Henry Ford.</p>

                </div>
                <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-5">

                        <div class="col-12 col-sm-6 col-lg-12">
                            <div class="border-start ps-4">
                                <i class="fas fa-trophy fa-3x text-primary mb-3"></i>
                                <h4 class="mb-3 text-capitalize">Achievement</h4>
                                <span>We are proud to announce that our exceptional high school team secured a position in the Lemelson-MIT InvenTeam 2023 Grant. The team will receive $7,500 in grant funding and other support to build a technological invention to solve a problem. <p><a href="https://news.mit.edu/2023/high-school-teams-named-lemelson-mit-inventeams-1025">MIT-InvenTeams</a></p> <img src="MIT-NEWS.png" alt="Trulli" width="200" height="50"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





             <?php    
            $row_query =mysqli_query($conn,"SELECT * FROM  index_page_content WHERE row_no =1");
            if(mysqli_num_rows($row_query)>0){
            $row_no =mysqli_fetch_assoc($row_query);
                        
            ?>
            <div class="row g-5 align-items-end mt-3 justify-content-evenly">
                <div class="col-lg-4 col-md-5  my-0 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/<?php echo  $row_no['picture']  ?>" style="width:100%; height:100%;">
                </div>
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-3 text-primary mb-0"><?php echo  $row_no['heading']  ?></h1>
                    
                    <h1 class="display-5 mt-2 "><?php echo  $row_no['subheading']  ?></h1>
                    <p class="mb-4  mt-3"><?php echo  $row_no['description']  ?></p>

                </div>
                
            </div>
           <?php   } ?>

           <?php    
            $row_query =mysqli_query($conn,"SELECT * FROM  index_page_content WHERE row_no =2");
            if(mysqli_num_rows($row_query)>0){
            $row_no =mysqli_fetch_assoc($row_query);
                        
            ?>
            <div class="row g-5 align-items-end mt-3 justify-content-evenly">
               
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-3 text-primary mb-0"><?php echo  $row_no['heading']  ?></h1>
                    
                    <h1 class="display-5 mt-2 "><?php echo  $row_no['subheading']  ?></h1>
                    <p class="mb-4  mt-3"><?php echo  $row_no['description']  ?></p>

                </div>
                <div class="col-lg-4 col-md-5  my-0 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/<?php echo  $row_no['picture']  ?>" style="width:100%; height:100%;">
                </div>
                
            </div>
           <?php   } ?>

           <?php    
            $row_query =mysqli_query($conn,"SELECT * FROM  index_page_content WHERE row_no =3");
            if(mysqli_num_rows($row_query)>0){
            $row_no =mysqli_fetch_assoc($row_query);
                        
            ?>
            <div class="row g-5 align-items-end mt-3 justify-content-evenly">
                <div class="col-lg-4 col-md-5  my-0 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/<?php echo  $row_no['picture']  ?>" style="width:100%; height:100%;">
                </div>
                <div class="col-lg-7 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="display-3 text-primary mb-0"><?php echo  $row_no['heading']  ?></h1>
                    
                    <h1 class="display-5 mt-2 "><?php echo  $row_no['subheading']  ?></h1>
                    <p class="mb-4  mt-3"><?php echo  $row_no['description']  ?></p>

                </div>
                
            </div>
           <?php   } ?>
            
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/back.png">
        <div class="container py-5">
            <div class="row g-5">
                <?php $squery = mysqli_query($conn, "SELECT * from tbl_user where user_type='student'");
                $jquery = mysqli_query($conn, "SELECT * from tbl_user where user_type='Judge'");
                $mquery = mysqli_query($conn, "SELECT * from tbl_user where user_type='Mentor'");
                $tquery = mysqli_query($conn, "SELECT * from tbl_team ");

                $row = mysqli_num_rows($squery); ?>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up"><?php echo $row; ?></h1>
                    <span class="fs-5 fw-semi-bold text-light">Our Students</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up"><?php echo mysqli_num_rows($mquery); ?></h1>
                    <span class="fs-5 fw-semi-bold text-light">Our Mentors</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up"><?php echo mysqli_num_rows($jquery) ?></h1>
                    <span class="fs-5 fw-semi-bold text-light">Our Judges</span>
                </div>
                <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up"><?php echo mysqli_num_rows($tquery)  ?></h1>
                    <span class="fs-5 fw-semi-bold text-light">Our Team Projects</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->





    <!-- Service Start -->
    <div class="container-xxl py-2">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">


                <h1 class="display-5 mb-5">Current Events</h1>
            </div>
            <div class="owl-carousel event-carousel row g-4 mb-5  ">
                <?php

                $query = mysqli_query($conn, "SELECT * FROM events WHERE type = 'current'");
                $no_row = mysqli_num_rows($query);
                if ($no_row > 0) {
                  while($rows = mysqli_fetch_assoc($query)){





                ?>
                    <div class=" event-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <img class="img-fluid" src="./img/<?php echo $rows['picture']  ?>" alt="event">
                            </div>
                            <div class="service-text rounded p-3">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid icon-img" src="./img/icon/icon-3.png" alt="Icon">
                                </div>
                                <h4 class="mb-3"><?php echo $rows['event_name']  ?></h4>
                                <p class="mb-4"><?php echo $rows['description']  ?></p>
                                <?php if ($rows['link'] != '') {
                                    echo '<a class="btn btn-sm" href="' . $rows["link"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                } else {
                                    echo '<a class="btn btn-sm" href="./img/' . $rows["picture"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                                }  ?>
                            </div>
                        </div>
                    </div>

                    <?php  } ?>
            </div>

        <?php


                } else {
                    echo '<div class=" mx-auto mb-3 " >
    
        
        <h6 class="py-1 ">NO CURRENT EVENT</h6>
   
</div>';
                }


        ?>



       
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

            <h1 class="display-5 mb-5">Past Events</h1>
        </div>
        <div class="owl-carousel event-carousel row g-4 mb-5  ">
            <?php

            $query = mysqli_query($conn, "SELECT * FROM events WHERE type = 'past'");
            $no_row = mysqli_num_rows($query);
            if ($no_row > 0) {
              while($rows1 = mysqli_fetch_assoc($query)){





            ?>
                <div class=" event-item wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="./img/<?php echo $rows1['picture']  ?>" alt="event">
                        </div>
                        <div class="service-text rounded p-3">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid icon-img" src="./img/icon/icon-3.png" alt="Icon">
                            </div>
                            <h4 class="mb-3"><?php echo $rows1['event_name']  ?></h4>
                            <p class="mb-4"><?php echo $rows1['description']  ?></p>
                            <?php if ($rows1['link'] != '') {
                                echo '<a class="btn btn-sm" href="' . $rows1["link"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                            } else {
                                echo '<a class="btn btn-sm" href="./img/' . $rows1["picture"] . '" target="blank"><i class="fa fa-plus text-primary me-2"></i>Read More</a>
                                            ';
                            }  ?>
                        </div>
                    </div>
                </div>
                <?php }  ?>
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





    <!-- Projects Start -->
    <!-- <div class="container-xxl py-2">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Projects</p>
                <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline rounded mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">Complete Projects</li>
                        <li class="mx-2" data-filter=".second">Ongoing Projects</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-1.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Landscaping</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-2.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Pruning plants</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-3.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Irrigation & Drainage</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-4.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Garden Maintenance</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-5.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Green Technology</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-inner rounded">
                        <img class="img-fluid" src="img/service-6.jpg" alt="">
                        <div class="portfolio-text">
                            <h4 class="text-white mb-4">Urban Gardening</h4>
                            <div class="d-flex">
                                <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-lg-square rounded-circle mx-2" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Projects End -->


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
                                            <img class="img-fluid mentor_image" src="./img/<?php echo $rows2['picture']  ?>" alt="">
                                            <div class="team-text">
                                                <h5 class="mb-0"><?php echo $rows2['mentor_name']  ?></h5>
                                                <p class="text-primary"><?php echo $rows2['qualification']  ?></p>
                                              
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

    <div class="container-xxl ">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary"></p>
                <h1 class="display-5 mb-5">Our Partners</h1>
            </div>
            <!-- Vendor Start -->
            <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container py-2 mb-2">
                    <div class="bg-white">
                        <div class="owl-carousel vendor-carousel">
                            <a href="https://annarborusa.org/" target="blank"> <img src="img/SPARK.png" alt=""></a>
                            <a href="https://www.fordfund.org/2022communitycorps" target="blank"> <img src="img/fcc.png" alt=""></a>
                            <a href="https://emubrightfutures.org/" target="blank"> <img src="img/EMUBF.png" alt=""></a>
                            <a href="https://www.mistemregion2.org/" target="blank"><img src="img/MSTEM.png" alt=""></a>
                            <a href="https://www.toyota.com/" target="blank"><img src="img/toyota.png" alt=""></a>

                            <a href="https://www.ycschools.us/" target="blank"> <img src="img/ycs.jpg" alt="" style="width:70%; height:70%;"></a>
                            <a href="https://www.lincolnk12.org/" target="blank"> <img src="img/lcs.jpg" alt=""></a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Vendor End -->
        </div>
    </div>

    <?php

    include 'footer.php';
    ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>



</body>

</html>