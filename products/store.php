<?php
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$_title = $_POST['title'];
$_link = $_POST['link'];
$_date = $_POST['date'];

//Connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root','');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = "INSERT INTO `products` (`title`, `link`, `date`) VALUES (:title, :link, :date);";

$stmt = $conn->prepare($query);
// $stmt->bindParam(':title', $_title);

$result = $stmt->execute(
  array(
  ':title'=> $_title,
  ':link' => $_link,
  ':date' => $_date
  )
);
var_dump($result);