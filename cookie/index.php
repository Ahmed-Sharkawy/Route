<?php
// $name = $_POST['name'];

// $password = $_POST['password'];

// if($name == "ahmed" && $password == "ahmed") {
// setcookie($name , "route" , time() + 60 * 60 * 24, "/");
// }


echo "<pre>";
print_r($_FILES);


$tmp = $_FILES['FILES']['tmp_name'];
$img_name = $_FILES['FILES']['name'];
move_uploaded_file($tmp,$img_name);
// print_r($tmp) ;