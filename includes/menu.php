<?php
// Some includes for header (Kristoffer)
  include_once("includes/config.php");
?>

<!-- header -->
<header>

    <!-- header inner -->
    <div class="header">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="./"><img src="images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                  <!--Jag ändrade alla.html till .php. -->
                                    <li class="active"> <a href="./">Home</a> </li>
                                    <li> <a href="./about"><?php echo $menu_about; ?></a> </li>
                                    <li><a href="./brand"><?php echo $menu_brand; ?></a></li>
                                    <li><a href="./special"><?php echo $menu_specials; ?></a></li>
                                    <li><a href="./contact"><?php echo $menu_brand; ?></a></li>
                                    <li class="last">
                                        <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                          <!-- fixad av Aylin, gjort menu dynamiskt förutom det oliwer har gjort ovan -->
                            <li><img src="icon/call.png" />010-331 05 00</li>
                            <li><img src="icon/email.png" />demo@gmail.com</li>
                            <li><img src="icon/loc.png" />Location</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
