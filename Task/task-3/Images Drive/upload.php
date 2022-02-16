<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $image_file = $_FILES['img-file'];


  $extension_img  = pathinfo($image_file['name'], PATHINFO_EXTENSION);

  if (empty($_POST['name-img'])) {
    $img = $image_file['name'];
  } else {
    $img = $_POST['name-img'] . '.' . $extension_img;
  }

  $type_image = ['GIF', 'PNG', 'SVG', 'jpg', 'jpeg', 'jfif', 'pjpeg', 'pjp'];

  if (in_array($extension_img, $type_image)) {
    move_uploaded_file($image_file['tmp_name'], "image/$img");
    // move_uploaded_file($image_file['tmp_name'], "image/" . uniqid() . ".$extension_img");
  } else {
    echo 'The uploaded file is not an image';
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image Name</label>
        <input type="text" name="name-img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input type="file" name="img-file" class="form-control" id="formFile" required>
      </div>
      <input type="submit" name="submit" value="submit" class="btn btn-dark"></input>
    </form>
  </div>
</body>

</html>