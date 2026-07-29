<!DOCTYPE html>
<html>
<body>
 <h1>Programming with PHP</h1>
 <?php

 echo "Problem 01 <br>";

$length = 5;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = $length <br>";
echo "Width = $width <br>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";

echo "Problem 02 <br>";
$amount = 500;
$vat = $amount * 0.15;

echo "Amount = $amount <br>";
echo "VAT  = $vat <br><br>";

echo "Problem 03 <br>";
$number = 5;

if ($number % 2 == 0)
{
    echo "$number is Even.";
}
else
{
    echo "$number is Odd. <br><br>";
}

echo "Problem 04 <br>";
$num1 = 1;
$num2 = 2;
$num3 = 3;

if ($num1 >= $num2 && $num1 >= $num3)
{
    echo "$num1 is the largest.";
}
elseif ($num2 >= $num1 && $num2 >= $num3)
{
    echo "$num2 is the largest.";
}
else
{
    echo "$num3 is the largest.<br><br>";
}

echo "Problem 05 <br>";
for ($i = 10; $i <= 100; $i++)
{
    if ($i % 2 != 0)
    {
        echo $i . " ";
    }
}
echo "<br><br>";


echo "Problem 06 <br>";
$numbers = array(1, 2, 3, 4, 5);
$search = 3;
$found = false;

for ($i = 0; $i < count($numbers); $i++)
{
    if ($numbers[$i] == $search)
    {
        $found = true;
        break;
    }
}

if ($found)
{
    echo "$search Found in the array.";
}
else
{
    echo "$search Not Found in the array.<br><br>";
}
echo "<br><br>";

echo"Problem 07 (a) <br>";
for ($j = 1; $j <= 3; $j++)
{
    for ($k = 1; $k <= $j; $k++)
    {
        echo "* ";
    }
    echo "<br><br>";
}


echo "Problem 07 (b) <br>";
for ($l = 3; $l >= 1; $l--)
{
    for ($m = 1; $m <= $l; $m++)
    {
        echo $m . " ";
    }
    echo "<br><br>";
}

echo "Problem 07 (c) <br>";
$ch = 'A';

for ($p = 1; $p <= 3; $p++)
{
    for ($q = 1; $q <= $p; $q++)
    {
        echo $ch . " ";
        $ch++;
    }
    echo "<br><br>";
}
?>

</body>
</html>