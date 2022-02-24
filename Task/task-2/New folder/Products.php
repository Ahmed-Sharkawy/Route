<?php
session_start();
$products = [
  'product 1' => [
    'name'        => 'Mobile iphone',
    'price'       => '1500',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '1.jpg',
  ],
  'product 2' => [
    'name'        => 'Mobile Oppo',
    'price'       => '1600',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '2.jpg',
  ],
  'product 3' => [
    'name'        => 'Mobile Samsung',
    'price'       => '2500',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '3.jpg',
  ],
  'product 4' => [
    'name'        => 'Mobile 4',
    'price'       => '3500',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '4.jpg',
  ],
  'product 5' => [
    'name'        => 'laptop',
    'price'       => '5500',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '5.jpg',
  ],
  'product 6' => [
    'name'        => 'PC',
    'price'       => '7500',
    'description' => 'OppoTechnology: GSM / HSPA / LTEDimensions: 160.1 x 73.2 x 7.8 mmWeight: 172 gSIM: Dual SIM (Nano-SIM, dual stand-by)',
    'img'         => '6.jpg'
  ],
];
echo '<pre>';
print_r($_SESSION['cart']);
echo '</pre>';
?>


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
    .card{text-align: center;}
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <?php

      foreach ($products as $key => $value) { ?>
        <div class="col-md-3 my-3">
          <div class="card">
            <img src="image/<?= $value['img'] ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?= $value['name'] ?>"</h5>
              <p class="card-text ">$<?= $value['description'] ?>"</p>
              <p class="card-text ">$<b><?= $value['price'] ?></b></p>
              <a href="Cart.php?name=<?= $value['name'] ?>" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>

</html>