<?php
$_title = $_POST['title'];
$_id = $_POST['id'];
$_link = $_POST['link'];

//Connect to database

$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root','');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "UPDATE `products` SET `title` = :title, `link` = :link WHERE `products`.`id` = :id;";

$stmt = $conn->prepare($query);
$stmt->bindParam(':title', $_title);
$stmt->bindParam(':id', $_id);
$stmt->bindParam(':link', $_link);

$result = $stmt->execute();
var_dump($result);