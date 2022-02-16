<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .card-img-top {height: 200px;}
    .d{width: 600px;justify-content: center;margin: auto;}
    .card {text-align: center;}
  </style>
</head>

<body>



  <?php
  session_start();

  $ahmed = $_GET['name'];
  if (in_array($ahmed, $_SESSION['cart'])) { ?>

    <div class="alert alert-danger d-flex align-items-center my-5 d" width="400px" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill" /></svg>

    <div><?= 'The product already exists'; header("Refresh:4; url=Products.php");?></div>

    </div>

  <?php

  } else {

    $_SESSION['cart'][] = $ahmed; ?>

    <div class="alert alert-success d-flex align-items-center my-5 d" role="alert"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill" /></svg>

    <div><?= 'Product added successfully , <br><b>After four seconds, you will be transferred to the shopping cart</b>'; ?></div>

    </div>

  <?php header("Refresh:4; url=Products.php");  } ?>
</body>

</html>