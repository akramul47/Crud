<?php

$_id = $_GET['id'];

 //Connect to database
$conn = new PDO("mysql:host=localhost;dbname=ecommerce", 'root','');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `products` WHERE id = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam('id', $_id);

$result = $stmt->execute();
$product = $stmt->fetch();
echo "<pre>";
// print_r($product);
echo "</pre>";

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create</title>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="text-center"> Show </h1>
                    <dl class="row">
                        <dt class="col-md-2"> ID:</dt>
                        <dd class="col-md-10"><?=$product['id']?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-2"> Title:</dt>
                        <dd class="col-md-10"><?=$product['title']?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-2"> Link:</dt>
                        <dd class="col-md-10"><?=$product['link']?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-2"> Date:</dt>
                        <dd class="col-md-10"><?=$product['date']?></dd>
                    </dl>

                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>