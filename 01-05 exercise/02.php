<?php
//1 exercise
$number = 10;
$secondarynumber = "10";

// = pieskirsana
// == salidzinasana
// === salidzinasa ieklaujot datu tipu

//2 exercise
if ($number == $secondarynumber)
{
    echo "not the same" . PHP_EOL;
}

//3 exercise
 $rangenum = 50;
if ($rangenum <= 100 && $rangenum >= 1)
{
    echo "it is in range of 1-100" . PHP_EOL;
}

//3 exercise
$str = "hello";
if ($str = "hello")
{
    echo "world" . PHP_EOL;
}

//4 exercise
$value = 50;
$x = 20;
$y = 60;
$z = 50;

if ($value >= $x && $value <= $y && $value = $z)
{

    echo "is greater than $x, less than $y and even to $z." . PHP_EOL;
}

//5 exercise
$condition = 51;
$c = 100;
$v = 49;

if ($condition >= $v && $condition <= $c)
{
    echo "correct" . PHP_EOL;
}

//7 exercise, ja novietot 7 uzd pec 6uzd rada ka $cipars = 70; ir unreachable statement.
$cipars = 70;

switch ($cipars)
{
    case $cipars <= 50;
        echo "low";
        break;

    case $cipars >= 50 && $cipars <= 100;
        echo "high" . PHP_EOL;
        break;
}

//6 exercise
$plateNumber = "AK-1337";

while (true)
{
    $plateNumber = (int) readline('Enter number:');

    switch ($plateNumber)
{
    case 1:
        echo "JM-9019 this plate number is not yours.". PHP_EOL;
        break;
    case 2:
        echo "AK-1337 this plate number is yours." . PHP_EOL;
        break;
    case 3:
        echo "IK-2881 this plate number is not yours." . PHP_EOL;
        break;
        default:
            echo "You entered wrong number, please try again" . PHP_EOL;
            exit;
}
}


