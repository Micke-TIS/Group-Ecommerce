<?php
// Some includes for header (Kristoffer)
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
// Some includes for MENU(Aylin)
  include_once("includes/menu.php");
?>




    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="brand">
        <div class="container">

        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <?php

                    $stmt = $pdo->query('SELECT * FROM tbl_products');
                    while ($row = $stmt->fetch())
                    {
                        echo '<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin"><div class="brand_box">';
                        echo '<img src="images/' . $row['product_id'] .'.png" alt="img" />';
                        echo '<h3>$<strong class="red">' . $row['price'] .'</strong></h3>';
                        echo '<span>' . $row['name'] .'</span>';
                        for ($k = 0; $k < $row['stars']; $k++) {
                            echo '<i><img src="images/star.png"/></i>';
                        }
                        echo '</div></div>';
                    }

                    ?>
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

    <?php
    // Some includes for footer (Juliet)
      include_once("includes/footer.php");
    ?>
