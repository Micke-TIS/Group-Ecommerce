<?php
// Some includes for header (Mikael)
  include_once("includes/header.php");
?>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <?php
    // Some includes for loader(Kristoffer)
      include_once("includes/loader.php");
    ?>
    <!-- end loader -->


    <?php
    // Some includes for header (Aylin)
      include_once("includes/menu.php");
    ?>


    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    // Some includes for header (oliwer)
      include_once("includes/contact.php");
    ?>

    <?php
    // Some includes for footer (Juliet)
      include_once("includes/footer.php");
    ?>
//NI KAN MED FÖRDEL ÄVEN HA JAVASCRIPT I FOOTER FÖR DYNAMISK!! [TEACHERS COMMENT]
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
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
