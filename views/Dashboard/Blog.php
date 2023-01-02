<!DOCTYPE html>
<html lang="en">

<head>
   <base href="http://localhost/cc/">
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Blog</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="libraries/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="libraries/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="libraries/css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="libraries/images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="libraries/css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
   <!-- header section start -->
   <div class="header_section">
      <div class="header_main">
         <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link" href="Dashboard/Index">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="Dashboard/About">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="Dashboard/Services">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="Dashboard/Blog">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link " href="Dashboard/Contact">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <div class="container-fluid">
            <div class="logo"><a href="index.html"><img src="libraries/images/logo.png"></a></div>
            <div class="menu_main">
               <ul>
                  <li class="active"><a href="Dashboard/Index">Home</a></li>
                  <li><a href="Dashboard/About">About</a></li>
                  <li><a href="Dashboard/Services">Services</a></li>
                  <li><a href="Dashboard/Blog">Blog</a></li>
                  <li><a href="Dashboard/Contact">Contact us</a></li>
                  <li><a href="Dashboard/Login">Login</a></li>
                  <li><a href="Dashboard/Register">Register</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- header section end -->
   <!-- blog section start -->

   <body class="container-fluid">
      <div class="row container-flex">
         <?php
         while ($row = $result->fetch_assoc()) {
         ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col mt-3">
               <div class="card  mt-2" style="height:25rem;">
                  <img class="card-img-top" src="libraries/images/<?= $row['image'] ?>" alt="Card image cap" style="height:20rem;">
                  <div class="card-body">
                     <h5 class="card-title"><?= $row['title'] ?></h5>
                     
                     <!-- <a href="Dashboard/ViewBlog" class="btn btn-primary">View Blog</a> -->
                     
                     <a href="Dashboard/ViewBlog?bid=<?=$row['bid']?>" class="btn btn-primary">view</a>
      
                    


                  </div>
               </div>
            </div>
         <?php
         }
         ?>
      </div>
   </body>




   <!-- blog section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="input_btn_main">
            <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
            <div class="subscribe_bt"><a href="#">Subscribe</a></div>
         </div>
         <div class="location_main">
            <div class="call_text"><img src="libraries/images/call-icon.png"></div>
            <div class="call_text"><a href="#">Call +01 1234567890</a></div>
            <div class="call_text"><img src="libraries/images/mail-icon.png"></div>
            <div class="call_text"><a href="#">demo@gmail.com</a></div>
         </div>
         <div class="social_icon">
            <ul>
               <li><a href="#"><img src="libraries/images/fb-icon.png"></a></li>
               <li><a href="#"><img src="libraries/images/twitter-icon.png"></a></li>
               <li><a href="#"><img src="libraries/images/linkedin-icon.png"></a></li>
               <li><a href="#"><img src="libraries/images/instagram-icon.png"></a></li>
            </ul>
         </div>
      </div>
   </div>
   <!-- footer section end -->
   <!-- copyright section start -->
   <div class="copyright_section">
      <div class="container">
         <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html
               Templates</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
   </div>
   <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="libraries/js/jquery.min.js"></script>
   <script src="libraries/js/popper.min.js"></script>
   <script src="libraries/js/bootstrap.bundle.min.js"></script>
   <script src="libraries/js/jquery-3.0.0.min.js"></script>
   <script src="libraries/js/plugin.js"></script>
   <!-- sidebar -->
   <script src="libraries/js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="libraries/js/custom.js"></script>
   <!-- javascript -->
   <script src="libraries/js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <!-- <script>
function openCard() {
  var card = document.getElementById("myCard");
  card.classList.add("open");
}
</script> -->


</body>

</html>