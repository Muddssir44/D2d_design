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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   <!-- Spinner Start -->
   <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->

<!-- Topbar End -->


<!-- Navbar Start -->
<?php include  'header.php'; ?>
<!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Our Mentors</h1>
            
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container emuinvent">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                
                <h2 class=" mb-3">.. Creating The Environment Of Innovation And Problem Solving.</h2>
            </div>

  
                      <div class="row py-md-3" >
                       
                        <div class="col-lg-6   wow fadeInUp mb-3 mb-lg-0" data-wow-delay="0.1s" >
                         
                          <p class="poster-discription">
                            School teachers can bring their class teams to the competition. We understand that your students might
                            be participating in other STEM and non-STEM related activities and competitions; EMIiNVENT is unique as
                            it introduces and teaches Innovation, entrepreneurship, and problem-solving. Henry Ford Foundations has
                            developed the Innovation and entrepreneurship process curriculum for 3-12 graders. EMUiNVENT and Henry
                            Ford Foundations conduct orientation workshops and also help teachers to learn the Innovation and entrepreneurship
                            process. Interested teachers please email us for details at emu_invent@emich.edu
                          </p>
                        </div>
                    
                        <div class="col-lg-5 wow fadeInUp " data-wow-delay="0.8s">
                          
              
                            <div  class="owl-carousel  carousel1">


                                <figure><img src="img/IMG_0634.JPG" alt=""></figure>  
                                 <figure><img src="img/IMG_0627.JPG" alt=""></figure> 
                                 <figure><img src="img/Judge.JPG" alt=""></figure> 
                                 <figure><img src="img/IMG_0646.JPG" alt=""></figure> 
                                </div>
              
              
              
              
                        </div>
                      </div>
                
   
        </div>
    </div>
              
          

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


   <!-- Footer Start -->
   <?php include  'footer.php'; ?>
<!-- Footer End -->


   


   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>