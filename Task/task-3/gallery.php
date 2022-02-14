<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .img-thumbnail {
      height: 200px
    }
  </style>
</head>

<body>

  <?php

  $result_img = scandir("image/");

  echo "<div class='container'>";
  foreach ($result_img as $key => $value) {
    if ($key > 1) {
      echo "<a href='image/$value' download><img src='image/$value' class='img-thumbnail' width='250px' height='200px'></a>";
    }
  }
  echo "<div>";
  ?>

</body>

</html>