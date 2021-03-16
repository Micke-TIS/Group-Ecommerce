<?php
// Some includes for header (oliwer)
  include_once("includes/header.php");
?>
   <!-- body -->
   <body class="main-layout special-page">
      <!-- loader  -->
      <?php
      // Some includes for loader(Kristoffer)
        include_once("includes/loader.php");
      ?>
      <!-- end loader -->



      <?php
      // Some includes for loader(Aylin)
        include_once("includes/menu.php");
      ?>


      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 25% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                           <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner1.png" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span>All New Phones </span>
                        <h1>up to 50% Flat Sale</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content
                           <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                        <a class="buynow" href="#">Buy Now</a>

                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>


      <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-md-12 ">
                     <div class="footer-box">
                        <div class="headinga">
                           <h3>Address</h3>
                           <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                           <p>(+71) 8522369417<br>demo@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                           <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                           <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                           <li> <a href="#"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                        <div class="menu-bottom">
                           <ul class="link">
                              <li> <a href="#">Home</a></li>
                              <li> <a href="#">About</a></li>

                              <li> <a href="#">Brand </a></li>
                              <li> <a href="#">Specials  </a></li>
                              <li> <a href="#"> Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>
   </body>
</html>
