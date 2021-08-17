<?php
// echo funkcijaas neizmantojam

//exercise 1
function stringCount(string $a): string
{
    $a = "abcd";
    return $a . " " . "codelex" . PHP_EOL;
};
echo stringCount("");

//exercise 2
function integerCount(int $a, int $b)
{
    return $a * $b . PHP_EOL;
}
echo integerCount(10,5);

//exercise 3
$arthur = new stdClass();
$arthur->name = "Arturs";
$arthur->surname = "Krusts";
$arthur->age = 19;

$martins = new stdClass();
$martins->name = "Martins";
$martins->surname = "Kils";
$martins->age = 17;

$juris = new stdClass();
$juris->name = "Juris";
$juris->surname = "Bargais";
$juris->age = 80;

$persons = [$arthur, $martins, $juris];
function checkAge(stdClass $person): bool
{
    return $person->age >= 18;

}

//exercise 4
foreach ($persons as $person)
{
    if (checkAge($person))
    {
        echo "{$person->name} is an adult." . PHP_EOL;
    } else
    {
        echo "{$person->name} is under age." .PHP_EOL;
    }
}

//exercise 5
$apple = new stdClass();
$apple->weight = 10;
$apple->name = "Apple";

$pear = new stdClass();
$pear->weight = 15;
$pear->name = "Pear";

$orange = new stdClass();
$orange->weight = 7;
$orange->name = "Orange";

$fruits = [$apple, $pear, $orange];

$shippingPrice = [$apple->weight <= 10 => "1 euro.", $pear->weight <= 10 => "2 euro.", $orange->weight <= 10 => "1 euro."];
//$shippingPrice = [$fruits[0 && 1 && 2] <= 10 => 100];


function checkPrice(stdClass $fruit): int
{
    return $fruit->weight <= 10;

}
foreach ($fruits as $fruit)
{
    if (checkPrice($fruit))
    {
        echo $fruit->name . " " . $fruit->weight . "kg" . " " . "shipping will cost" . " " . $shippingPrice[0] . PHP_EOL;
    }else {
        echo $fruit->name . " " . $fruit->weight . "kg" . " " . "shipping will cost" . " " . $shippingPrice[1] . PHP_EOL;
    }
}



//6 exercise
$assocs = [5, 10, 15, 3.14, "hello"];

for ($i = 0; $i < 1; $i++)
{
    echo count($assocs) . PHP_EOL;
}

$multipliedInts = [$assocs[0], $assocs[1], $assocs[2]];
function multiplyInt(int $a, int $b)
{
    return $a;
}
foreach ($multipliedInts as $multipliedInt)
{
    echo $multipliedInt * 2 . PHP_EOL;

}
echo multiplyInt(2, $multipliedInt) . PHP_EOL;

//7 exercise
$person = new stdClass();
$person->name = 'Arturs';
$person->licenses = ['H'];
$person->cash = 900;

$shotgun= new stdClass();
$shotgun->name = 'Shotgun';
$shotgun->price = 150;
$shotgun->license = 'H';

$AK47 = new stdClass();
$AK47->name = 'AK-47';
$AK47->price = 500;
$AK47->license = 'H';

$PISTOL = new stdClass();
$PISTOL->name = 'Pistol';
$PISTOL->price = 200;
$PISTOL->license = 'P';

$weapons = [$PISTOL, $AK47, $shotgun];

foreach ($weapons as $key => $weapon)
{
    echo "{$key} | {$weapon->name} ({$weapon->price}$) [{$weapon->license}]" . PHP_EOL;
}

$selection = (int) readline('Enter selection');

// isset ir lai parbauit vai masiva ir tas ievaditais skaitlis
if (!isset($weapons[$selection]))
{
    echo "Invalid selection" .PHP_EOL;
    exit;
}

$selectedWeapon = $weapons[$selection];
var_dump($selectedWeapon);

if (!in_array($selectedWeapon->license, $person-> licenses) || $person->cash < $selectedWeapon-> price)
{
    echo "Person can not purchase weapon";
    exit;
}
echo "Person can purchase weapon $selectedWeapon->name" .PHP_EOL;
