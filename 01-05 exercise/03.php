<?php

//1 exercise
$items = [10, 20, 30];

echo array_sum($items) . PHP_EOL;

//2 exercise
$personinfo = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];
var_dump($personinfo);

//3 exercise
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

var_dump($person) . PHP_EOL;

//4 exercise
$item = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]

];
echo $item[0][1]["name"] . ' ' . $item[0][1]["surname"] . ' ' . $item[0][1]["age"] . PHP_EOL;

//5 exercise
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][0]["name"] . ' ' . '&' . ' ' . $items[0][1]["name"] . ' ' . $items[0][1]["surname"] .  "'s" . PHP_EOL;