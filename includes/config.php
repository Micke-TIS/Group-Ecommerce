<?php
//Database connection (Kristoffer/Oliwer)
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "webbservone";
 $conn=mysqli_connect($servername,$username,$password,"$dbname");
 if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
 }
?>

<?php
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
$menu_about = $row['menu_about'];
$menu_brand = $row['menu_brand'];
$menu_specials = $row['menu_specials'];
$menu_contact = $row['menu_contact'];
$title_about = $row['title_about'];
}
?>
