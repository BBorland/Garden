<?php

namespace FruitGarden;

include ('loader.php');

$garden = new FruitGarden();
for ($i = 1; $i <= 10; $i++) {
    $fruitTree = new FruitTree($i, 'apple');
    $garden->addFruitTree($fruitTree);
}
for ($i = 11; $i <= 25; $i++) {
    $fruitTree = new FruitTree($i, 'pear');
    $garden->addFruitTree($fruitTree);
}

$garden->collectAllFruits();
$fruitCounts = $garden->getFruitCounts();
echo "Total apples collected: " . $fruitCounts['apples'] . PHP_EOL;
echo "Total pears collected: " . $fruitCounts['pears'] . PHP_EOL;
$totalWeight = $garden->getTotalWeight();
echo "Total weight of all fruits: " . $totalWeight . " g" . PHP_EOL;
