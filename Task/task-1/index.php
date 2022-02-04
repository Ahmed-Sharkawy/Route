<?php

// Q1

echo 'Q1' . '<br>';

$hexMessage = '596f7520636f6e76657274656420697420636f72726563746c7921';

echo hex2bin($hexMessage) . '<br>';
echo bin2hex('You converted it correctly!') . '<br>';

// Q2
echo '<hr>Q2<br>';

$htmlContent = "<h1>PHP track</h1><p>PHP is an interpreted language</p>";

echo strip_tags($htmlContent)   . '<br>';
echo htmlentities($htmlContent) . '<br>';

// Q3
echo '<hr>Q3<br>';

$username = " Kareem Fouad ";
echo trim($username);


// Q4
echo '<hr>Q4<br>';

$num = 15023198.91;
echo number_format($num, 2);


// Q5
echo '<hr>Q5<br>';

$employeePositions = [
  'kareem fouad'    => ' backend',
  'ahmed bahnasy'   => ' frontend',
  'mohammed nabeel' => ' android',
];

foreach ($employeePositions as $key => $value) {
  echo $key . ' => ';
  echo $value . '<br>';
}

foreach ($employeePositions as $key => $value) {
  $ar1[] = $key;
  $ar2[] = $value;
}
echo '<pre>';
print_r($ar1);
print_r($ar2);
echo '</pre>';

echo '<hr>';

echo '<pre>';
print_r(array_keys($employeePositions));
print_r(array_values($employeePositions));
echo '</pre>';

// Q6
echo '<hr>Q6<br>';

$nums = [4, 7, 1];
list($x, $y, $z) = $nums;

echo $x . "<br>" . $y . "<br>" . $z;

// Q7
echo '<hr>Q7<br>';

$userData = [
  'name'      => 'kareem',
  'job'       => 'backend',
  'language'  => 'php',
  'framework' => 'laravel',
];

extract($userData);

echo $name . "<br>" . $job . "<br>" . $language . "<br>" . $framework;
