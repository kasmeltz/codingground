<?php

function chooseUniqueName($names) {
    $namesToChoose = [];
    foreach ($names as $key => $value) {
        $namesToChoose[] = $key;
    }
    
    $idx = rand ( 1, count($namesToChoose)) - 1;
    $n1 = $namesToChoose[$idx];
    return $n1;
}

$names = [ 
    "Travis A" => true, 
    "Alexander B" => true, 
    "Mackenzie B" => true,
    "Kale C" => true,
    "Jessica C" => true,
    "Wendy G" => true,
    "James L" => true,
    "David M" => true,
    "Jesse M" => true,
    "Erik O" => true,
    "Tyler R" => true,
    "Evan S" => true,
    "Erick T" => true,
    "Jordan W" => true
];

echo "---------------------------------\n";

while (count($names) > 0) 
{
    $n1 = chooseUniqueName($names);
    unset($names[$n1]);
    echo "$n1";
    
    if (count($names) == 0) {
        echo "\n";
        break;
    } else {
        echo ",";
    }
    
    $n2 = chooseUniqueName($names);
    unset($names[$n2]);
    echo "$n2\n";
}

echo "---------------------------------\n";