<?php
//Database connection (Kristoffer/Oliwer)
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webbservone";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

?>


<?php
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
$menu_about = $row['menu_about'];
$menu_brand = $row['menu_brand'];
$menu_specials = $row['menu_specials'];
$menu_contact = $row['menu_contact'];
}
?>



<?php


$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{

  $title_about = $row['title_about'];
  $content = $row['content'];
}
 ?>
