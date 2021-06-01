<?php
// Some includes for header (oliwer)
  include_once("includes/header.php");
?>
   <!-- body -->
   <body class="main-layout special-page">


      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">



  <!-- Menu -->
  <?php
  // Some includes for menu(Henrik)
    include_once("includes/menu.php");
  ?>
  <!-- Menu end -->
      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/banner.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                       <!-- Kod ifrån config.php, koppling till databasen (dynamisk carousel) gjord av Oliwer -->
                        <span><?php echo $subheading; ?></span>
                        <h1><?php echo $heading; ?></h1>
                        <p><?php echo $content; ?></p>
                        <a class="buynow" href="#"><?php echo $button; ?></a>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/banner1.png" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                       <!-- Kod ifrån config.php, koppling till databasen (dynamisk carousel) gjord av Oliwer -->
                        <span><?php echo $subheading; ?> </span>
                        <h1><?php echo $heading; ?></h1>
                        <p><?php echo $content; ?></p>
                        <a class="buynow" href="#"><?php echo $button; ?></a>

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


      <?php
      // Some includes for footer (Juliet)
        include_once("includes/footer.php");
      ?>
