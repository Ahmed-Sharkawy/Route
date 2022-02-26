<?php

// 80 => 6
// 90 => 10
// 92 => 11
$oil = 92;
$L = 20;


if ($oil == 80) {

    echo $L * 6;

} else if ($oil == 90){

    echo $L * 10;

} else if ($oil == 92){

    echo $L * 11;

} else {

    echo "No oil";
}





















// $degree = 85;

// if ($degree == 100 || $degree > 100) {
//     echo "A+";

// } else if( $degree >= 90) {
//     echo "B+";

// } else if ($degree >= 80 ) {
//     echo "D+";

// } else if ($degree >= 65) {
//     echo "C+";

// } else if ($degree >= 50) {
//     echo "GOOD";

// } else {

//     echo "fail";
// }



// echo "</br>" . "</br>" . "</br>";



// if ($degree == 100 || $degree > 100) :
//     echo "A+";

// elseif ($degree >= 90) :
//     echo "B+";

// elseif ($degree >= 80) :
//     echo "D+";

// elseif ($degree >= 65) :
//     echo "C+";

// elseif ($degree >= 50) :
//     echo "GOOD";

// else :
//     echo "fail";

// endif;






// $name = 0;

// while ($name < 25) {
//     if ( $name == 3 ) {
//         echo "Ahmed Al Sharkawy </br>";
//     } else {
//         echo "$name</br>";
//     }
//     ++$name;
// }


// $i = 0;

// while($i <= 10) {
//     $f = 0;
//     while ($f <= $i) {
//         echo "*";
//         $f++;
//     }
//     echo "<br>";
//     $i++;
// }
// echo "ds";


// $a = ["html", "css", "js", "php", "mysql",];

// for ($i=0; $i < count($a); $i++) {
//     echo $a[$i] . "</br>";
// }

// $cc = [

//         "firesname" => "ahmed",
//         "lastname" => "al sharkawy5",
//         "age" =>20
// ];

// $vv = count($cc);
// $qq = array_keys($cc);

// for ($i=0; $i < $vv; $i++) {
//     echo "</br>";

//     echo $cc[$qq[$i]];
//     echo "</br>";
//     echo $cc[array_keys($cc)[$i]] ;
//     echo "</br>";
//     echo array_keys($cc)[$i];
//     echo "</br>";
// }

// $ccc = [
//     [
//         "firesname" => "ahmed",
//         "lastname" => "al sharkawy5",
//         "age" =>20
//     ],
//     [
//         "firesname" => "ahmed",
//         "lastname" => "al sharkawy",
//         "age" => 23
//     ],
//     [
//         "firesname" => "ahmed",
//         "lastname" => "al sharkawy",
//         "age" => 23
//     ]
// ];


// foreach ($ccc as $qq) {
//     foreach ($qq as $q => $y) {
//         echo  $q ." : ". $y . "<br>";
//     }
//     echo "<hr>";
// }


// $we = [20,44,89,84,52,2,66,15,68,13,32];
// echo max($wwe);
// $td = count($we);
// $x = $we[0];
// for ($i=0; $i < $td; $i++) {
//     if ($we[$i] > $x) {
//         $x = $we[$i];
//     }
// }
// echo $x;




// function number($x,$o,$y = 10) {
//     if ($o == "+") {

//         return $x + $y;

//     } elseif ($o == "-") {

//         return $x - $y;
//     } elseif ($o == "*") {

//         return $x * $y;
//     } elseif ($o == "/") {

//         return $x / $y;
//     }

// echo "<br>";

//     switch ($o) {
//         case '+':
//             return $x + $y;
//         break;
//         case "-":
//             return $x - $y;
//         break;
//         case "*":
//             return $x * $y;
//         break;
//         case "/":
//             return $x / $y;
//         break;
//     }
// }

// echo number(5,"/");




// $number = [25,65,98,47,35];
// $age = $_POST['age'];
// function age($age) {
//     if ( $age > 18 ) {
//         echo "good";
//     } else {
//         echo "no";
//     }
// }

// age($age);


// for ($i=0; $i < 10; $i++) {

//     for ($t=0; $t <= $i; $t++) {
//         echo "*";
//     }
//     echo "</br>";
// }



// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// $sum = $_POST['sum'];

// if ($sum == "+") :

//         echo $num1 + $num2;

//     elseif ( $sum == "-") :

//         echo $num1 - $num2;

//     elseif ($sum == "*") :

//         echo $num1 * $num2;

//     elseif ($sum == "/") :

//         echo $num1 / $num2;

// endif;

// echo "</br>";
// echo "</hr>";

// switch ($sum) {
//     case '+':

//         echo $num1 + $num2;

//     break;
//     case '-':

//         echo $num1 - $num2;

//     break;
//     case '*':

//         echo $num1 * $num2;

//     break;
//     case '/':

//         echo $num1 / $num2;

//     break;

// }


// setcookie("ahmed","route", time() + 60 * 60 * 24, "/");

// if ($_COOKIE > 0 ) {
//     header("Refresh:5; url=index.html");
// }

// echo "a" > 1;
// $newName = $_POST['num1'];
// echo "<pre>";
// print_r( explode( "," , $_POST['num1'] , 10));

// $newName = explode(",", $_POST['num1']);

// $content = file_get_contents("certificate.html");

// foreach ($newName as $name) {


//     $newntent = str_replace("name", $name, $content);
//     $newContent = str_replace("22/12/2021", date("d/m/Y"), $content);

//     fopen("$name.html", "w+");

//     file_put_contents("$name.html", $newContent);
//     file_put_contents("$name.html", $newntent);

// }




// $name = explode("," , $_POST['num1'] );

// $Content = file_get_contents("certificate.html");

// foreach ($name as $key) {

//     $nameContent = str_replace(["name", "22/12/2021", "course"] , ["$key", date("d/m/Y"), $_POST['num2']] , $Content);
//     // $nameContent = str_replace("22/12/2021", date("d/m/Y"), $nameContent);
//     // $nameContent = str_replace("course", $_POST['num2'], $nameContent);

//     fopen("$key.html" , "w");

//     file_put_contents("$key.html" , $nameContent);
// }
// header("location:$key.html");


// $name = $_POST['name'];

// $password = $_POST['password'];

// if($name == "ahmed" && $password == "ahmed") {
//     setcookie($name , "route" , time() + 60 * 60 * 24, "/");
// }

// $hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';
// echo hex2bin($hexMessage);
// echo "<br>" . bin2hex('You converted it correctly');


// $htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";
// echo strip_tags($htmlContent);
// echo htmlspecialchars($htmlContent);
// echo "<pre>";
// print_r($_SERVER);
// echo '<br>';
// $aa = $_SERVER["REQUEST_TIME_FLOAT"];




// for ($i=0; $i < 1; $i++) {
//     echo $i . '<br>';
// }
// $as = $_SERVER["REQUEST_TIME_FLOAT"];

// $totol = $aa - $as ;

// echo $totol;

// print_r($_POST);

// echo "<pre>";
// print_r($_FILES);



// $tmp_name = $_FILES['name']['tmp_name'];
// $name = $_FILES['name']['name'];
// move_uploaded_file($tmp_name,"up/". $name);

echo -5 + 8 * 6 ."<br>";
echo (55+9) % 9 . "<br>";
echo 20 + -3 * 5 / 8  % 3 . "<br>";
echo 5 + 15 / 3 * 2 - 8 % 3  . "<br>";

$username = " Kareem Fouad ";

echo  $username . "<br>" ;
echo trim($username);