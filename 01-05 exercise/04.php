<?php

//1 exercise
$num = [1, 2, 3, 4, 5, 6, 7];

foreach ($num as $number)
{
    echo $number . PHP_EOL;
}

//2 exercise
$for = [10, 20, 30, 40, 50, 60, 70];

for ($i = 0; $i < count($for); $i++)
{
    echo $for[$i] . PHP_EOL;
}

//3 exercise
$x = 1;

while ($x < 10)
{
    echo "codelex". PHP_EOL;
    $x++;
}

//4 exercise
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$factor = 3;
foreach ($numbers as $number)
//($i = 0; $i < count($numbers);)
{
    if ($number % 3)
    {
    echo $number = "" .PHP_EOL;
    } elseif ($number % 4)
    {
        echo $number .PHP_EOL;
    }
}

//5 exercise
$john = new stdClass();
$john->name = "Arturs";
$john->surname = "Krusts";
$john->age = "19";
$john->birthday = "05 07 02";

$jane = new stdClass();
$jane->name = "Jane";
$jane->surname = "Doe";
$jane->age = "20";
$jane->birthday = "07 10 06";

$persons = [$john, $jane];

foreach ($persons as $person)
{
    echo "{$person->name} {$person->surname} ({$person->age} / {$person->birthday})" . PHP_EOL;
}
