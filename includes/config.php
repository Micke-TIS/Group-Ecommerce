<?php
//Database connection

$host='127.0.0.1'; // Changed because this is faster, localhost needs a dns lookup meanwhile this doesn't
$username='root';
$password='';
$dbname = "webbservone";

// PDO Options, how errors are handled etc.   
$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
  // Setting up the PDO object.
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Check if tbl_products table doesn't exist, if not we create it.
$pdo->query("CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` INT AUTO_INCREMENT NOT NULL,
  `name` varchar(150) NOT NULL,
  `stars` int,
  `price` decimal,
  PRIMARY KEY (`product_id`))
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci")->execute();

//Select specific columns from DB
$stmt = $pdo->query('SELECT menu_about, menu_brand, menu_specials, menu_contact, menu_telefon, title_about FROM tbl_articles LIMIT 1'); // Select the columns we need(a bit faster)
while ($row = $stmt->fetch())
{
  //Meny kopplad till databasen gjord av Oliwer
  $menu_about = $row['menu_about'];
  $menu_brand = $row['menu_brand'];
  $menu_specials = $row['menu_specials'];
  $menu_contact = $row['menu_contact'];
  $menu_telefon = $row['menu_telefon'];
  $title_about = $row['title_about'];
}

{
  $contact_button = $row['contact_button'];
  $contact_b = $contact['contact_contact'];
}

{
  //carousel kopplad till databasen gjord av Oliwer
  $subheading = $row['subheading'];
  $heading = $heading['heading'];
  $content = $content['content'];
  $button = $button['button'];
}
?>
