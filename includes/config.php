<?php
//Database connection

$host='127.0.0.1'; // Changed because this is faster, localhost needs a dns lookup meanwhile this doesn't
$username='root';
$password='';
$dbname = "webbservone";

$options = [
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
} catch (\PDOException $e) {
  throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$pdo->query("CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` INT AUTO_INCREMENT NOT NULL,
  `name` varchar(150) NOT NULL,
  `stars` int,
  `price` decimal,
  PRIMARY KEY (`product_id`))
  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci")->execute();

//Select specific columns from DB
$stmt = $pdo->query('SELECT * FROM tbl_articles LIMIT 1');
while ($row = $stmt->fetch())
{
  $menu_about = $row['menu_about'];
  $menu_brand = $row['menu_brand'];
  $menu_specials = $row['menu_specials'];
  $menu_contact = $row['menu_contact'];
  $title_about = $row['title_about'];
}

{
  $contact_button = $row['contact_button'];
  $contact_b = $contact['contact_contact'];
}
?>
