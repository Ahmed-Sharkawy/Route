<?php

// 4 , 7


echo 'Q1' . '<br>';
// Q1

echo -5 + 8 * 6 . '<br>';
echo  (55+9) % 9 . '<br>';
echo  ceil(20 + -3*5 / 8) . '<br>';
echo  5 + 15 / 3 * 2 - 8 % 3 . '<br>';

echo '<hr>'. 'Q2' . '<br>';
// Q2

echo ((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5));

echo '<hr>' . 'Q3' . '<br>';
// Q3

$num1 = 25;
$num2 = 25;

if ($num1 != $num2) {

  echo "$num1 != $num2";
} else {

  echo "$num1 == $num2";
}
echo '<br>';

$retVal = ($num1 < $num2) ? "$num1 < $num2" : "$num1 > $num2" ;
echo $retVal;

echo '<br>';

if ($num1 <= $num2) :
  echo "$num1 <= $num2";
else :
  echo "$num1 >= $num2";
endif;

echo '<hr>' . 'Q4' . '<br>';
// Q4

$fiist = 30;
$second = 25;
$third = 3;
echo $second - $third;
if ($fiist >= 20) {

  if ($fiist > ($second - $third)) {
    echo "done";
  }
} else {

  echo "number must be 20 or more";
}

echo '<hr>' . 'Q5' . '<br>';
// Q5

echo octdec(10);

echo '<hr>' . 'Q6' . '<br>';
// Q6

for ($i = 0; $i < 100; $i++) {
  if (($i % 2) != 0) {
    echo $i . "<br>";
  }
}

echo '<hr>' . 'Q7' . '<br>';
// Q7

$numx = 100;

for ($i = 2; $i < $numx; $i++) {

  if ($numx % $i == 0) {
    echo $i . "<br>";
  }

}

echo '<hr>' . 'Q8' . '<br>';
// Q8

$numx = 100;

for ($i = 1; $i < $numx; $i++) {

  if ($i % 3 == 0) {
    echo $i . " , ";
  }

}
echo "<br>";

for ($i = 1; $i < $numx; $i++) {

  if ($i % 5 == 0) {
    echo $i . " , ";
  }

}
echo "<br>";

for ($i = 1; $i < $numx; $i++) {

  if ($i % 3 == 0 && $i % 5 == 0) {
    echo $i . " , ";
  }

}
echo "<br>";

echo '<hr>' . 'Q9' . '<br>';
// Q9
$counter = 0;
for ($i=1; $i <=4 ; $i++) {

  for ($j=1; $j <=4 ; $j++) {

    for ($k=1; $k <=4 ; $k++) {

      if ($i != $j && $i !=$k && $j != $k) {
        $counter++;
        echo $i,$j,$k,"<br>";
      }

    }

  }

}
echo $counter;