<?php
session_start(); ?>
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
<link rel="stylesheet" href="adminpanel/assets/vendors/mdi/css/materialdesignicons.min.css">
  

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet">
 <style>
    /*  vanila js alert box */
    .bg-gradient-warning {
    background: -webkit-gradient(linear, left top, right top, from(#f6e384), to(#ffd500)) !important;
    background: linear-gradient(to right, #f6e384, #ffd500) !important; }
  
  .bg-gradient-danger {
    background: -webkit-gradient(linear, left top, right top, from( #fa5f5f), to(#f70f0f)) !important;
    background: linear-gradient(to right,  #fa5f5f, #f70f0f) !important; }
    .bg-gradient-success-dark {
      background: -webkit-gradient(linear, left top, right top, from(#57D9A3), to(#36B37E)) !important;
  background: linear-gradient(to right, #57D9A3,#36B37E) !important;  }
    .toast1 {
      position: absolute;
      top: 25px;
      right: 30px;
      border-radius: 12px;
      background: #fff;
      padding: 20px 35px 20px 25px;
      box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
      overflow: hidden;
display:none;
      transform: translateX(calc(100% + 30px));
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);

    }


    .toast1.active {
      transform: translateX(0%);


    }

    .toast1 .toast1-content {
      display: flex;
      align-items: center;
    }

    .toast1-content .check {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 35px;
      min-width: 35px;

      color: blue ;
      font-size: 20px;
      border-radius: 50%;
    }

    .toast1-content .message1 {
      display: flex;
      flex-direction: column;
      margin: 0 20px;
    }

    .message1 .text {
      font-size: 16px;
      font-weight: 400;
      color: #666666;
    }

    .message1 .text.text-1 {
      font-weight: 600;
      color: #333;
    }

    .toast1 .close {
      position: absolute;
      top: 10px;
      right: 15px;
      padding: 5px;
      cursor: pointer;
      opacity: 0.7;
    }

    .toast1 .close:hover {
      opacity: 1;
    }

    .toast1 .progress1 {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 3px;
      width: 100%;

    }

    #progress1::before {
      content: "";
      position: absolute;
      bottom: 0;
      right: 0;
      height: 100%;
      width: 100%;
      background: var(--bgColor, -webkit-gradient(linear, left top, right top, from(#57D9A3), to(#36B37E)));
      background: var(--bgColor, blue);
    }

    .progress1.active:before {
      animation: progress 5s linear forwards;
    }




    @keyframes progress {
      100% {
        right: 100%;
      }
    }



    .toast1.active~.pop-button {
      pointer-events: none;
    }


    /* end */
    @media(min-width:990px) {
      .toast1 {

        top: 17% !important;

      }

    }
  </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


   


    <!-- Navbar Start -->
    <?php include  'header.php'; ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    
    <!-- Page Header End -->
 
    <div class=" mt-5" style="
                 
               
                 display: flex;
                 align-items: center;
                 justify-content: center;
                 background-color: #f4f7ff;
                 overflow: hidden;">
    <div class="toast1 mt-5">

      <div class="toast1-content">
        <i class="mdi mdi-alert-circle check"></i>

        <div class="message1">
          <span class="text text-1"></span>
          
          <span class="text text-2"></span>
        </div>
      </div>
      <i class="mdi mdi-close close"></i>

      <!-- Remove 'active' class, this is just to show in Codepen thumbnail -->
      <div id="progress1" class="progress1 "></div>
    </div>



  </div>
   
   <!-- Quote Start -->
   <div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Login</p>
            <h1 class="display-5 mb-5">Login here  </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-3">
                        <div class="col-12">
                        <form class="forms-sample" id="logIn" action="logincode.php" method="POST">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" id="email" name="email" placeholder="Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0" id="password" name="password"   placeholder="password" required>
                                <label for="password">Your Password</label>
                            </div>
                        </div>
                       
                        <div class="col-12 text-center">
                            <button class="btn btn-primary py-md-3 px-4" type="submit" name="login">Login</button>
                        </div>
                        </form>
                        <div>
                            <a href="registration.php" class="text-primary ">Sign Up here</a>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->
  
    <!-- Team Start -->
   


     <!-- Footer Start -->
     <?php include  'footer.php'; ?>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
<script>




  const button = document.querySelector(".pop-button"),
  toast1 = document.querySelector(".toast1");
(closeIcon = document.getElementById("popup-close-btn")),
  (progress = document.querySelector(".progress1"));
  var checkItom= document.querySelector(".toast1-content .check ");
  const progressColor1=document.getElementById('progress1');
  // const progressBefore =window.getComputedStyle(progressColor1, '::before');
 

let timer1, timer2 ;
function showAlertBox() {
  window.scrollTo(0, 0);
  toast1.style.display = 'block';
  
  progress.classList.add("active");

  timer1 = setTimeout(function() {
    toast1.classList.add('active');
  }, 50);

  timer1 = setTimeout(() => {
    toast1.classList.remove("active");
  }, 5000); //1s = 1000 milliseconds

 

  timer2 = setTimeout(() => {
    toast1.style.display = 'none';
    progress.classList.remove("active");
  }, 5300);
}




function successBox(){
  checkItom.classList.remove("mdi-alert-circle-outline"); 
  progressColor1.style.setProperty('--bgColor','linear-gradient(to right, #57D9A3,#36B37E)'); 
  progressColor1.style.setProperty('--bgColor','-webkit-gradient(linear, left top, right top, from(#57D9A3), to(#36B37E))');
 checkItom.classList.add("bg-gradient-success-dark"); 
 checkItom.classList.add("mdi-check"); 

}
function requireBox(){
 
   progressColor1.style.setProperty('--bgColor','linear-gradient(to right, #f6e384, #ffd500)');
   progressColor1.style.setProperty('--bgColor','-webkit-gradient(linear, left top, right top, from(#f6e384), to(#ffd500))');
 checkItom.classList.add("bg-gradient-warning"); 

}
function faileBox(){
  checkItom.classList.remove("mdi-alert-circle-outline"); 
  progressColor1.style.setProperty('--bgColor',' linear-gradient(to right,  #fa5f5f, #f70f0f)');
   progressColor1.style.setProperty('--bgColor','-webkit-gradient(linear, left top, right top, from( #fa5f5f), to(#f70f0f))');
 checkItom.classList.add("bg-gradient-danger"); 
 checkItom.classList.add("mdi-close"); 

}

</script>
<?php



if (isset($_SESSION['error_msg'])) {
    
    echo '<script> 

faileBox();
          $(".message1 .text-1").text("Failed");
          $(".message1 .text-2").text("'. htmlspecialchars($_SESSION['error_msg']) . '");
          showAlertBox();</script>';

    
    session_destroy();
}
?>
  
</body>

</html>