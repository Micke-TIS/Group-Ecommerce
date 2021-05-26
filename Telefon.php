<?php
// Some includes for header (Kristoffer)
  include_once("includes/header.php");
  include_once("includes/config.php");
?>
<!-- body -->


<body class="main-layout">

  <?php
  // Some includes for loader(Kristoffer)
    include_once("includes/loader.php");
  ?>





  <?php
  // Some includes for menu (Aylin)
    include_once("includes/menu.php");
  ?>

    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2><?php echo $menu_telefon; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // Some includes for telefon(Kristoffer)
    //  //Gjorde så att texten som finns i includes/telefon.php är inkluderad i telefon.php som är vad som syns på hemsidan. Alltså istället för att all kod är på denna sida gör man koden blir dynamisk så att det blir enklare att kopia ifall men behöver. Detta kan vara bra ifall man ska kopiera headern eller footern till olika sidor.
      include_once("includes/telefon.php");
    ?>

    ?>

    <?php
    // Some includes for footer (Juliet)
      include_once("includes/footer.php");
    ?>
