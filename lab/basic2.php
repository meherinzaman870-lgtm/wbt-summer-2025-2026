<!DOCTYPE html>
<html>
<body>
 <h1>PHP Basic Task 2</h1>
 <?php

echo "Problem 01 <br>";

$principal  = 500;
$rate = 500;
$time = 500;

$simple_interest = ($principal * $rate * $time)/100;

echo "Principal = $principal <br>";
echo "Rate = $rate <br>";
echo "Time = $time <br>";
echo "Simple Interset = $simple_interest <br><br>";

echo "Problem 02 <br>";

$number = 5;
$isPrime = true;

if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
    echo "$number is a Prime Number.<br><br>";
} else {
    echo "$number is Not a Prime Number.>br><br>";
}

echo "Problem 03 <br>";

$number = 5;
$factorial = 1;

for ($j = 1; $j <= $number; $j++) {
    $factorial *= $j;
}

echo "Factorial of $number = $factorial<br><br>";

echo "Problem 04 <br>";

$numbers = array(10, 20, 30, 40, 50);

$sum = 0;
$count = count($numbers);

for ($k = 0; $k < $count; $k++) {
    $sum += $numbers[$k];
}

$average = $sum / $count;

echo "Array Elements: ";

for ($k = 0; $k < $count; $k++) {
    echo $numbers[$k] . " ";
    
}
echo "<br>";
echo "Sum = $sum <br>";
echo "Average = $average<br><br>";

echo "Problem 05 <br>";

for ($l = 1; $l <= 4; $l++)
{
    for ($m = 1; $m <= $l; $m++)
    {
        echo $l . " ";
    }
    echo "<br><br>";
}


 ?>
 </body>
 <html>