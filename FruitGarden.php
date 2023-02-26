<?php

namespace FruitGarden;

class FruitGarden
{
    /**
     * Массив деревьев
     * @var array
     */
    protected array $fruitTrees;

    public function __construct()
    {
        $this->fruitTrees = array();
    }

    /**
     * Фу-ция добавления дерева
     * @param FruitTree $fruitTree
     * @return void
     */
    public function addFruitTree(FruitTree $fruitTree): void
    {
        $this->fruitTrees[] = $fruitTree;
    }

    /**
     * Сбор всех фруктов
     * @return void
     */
    public function collectAllFruits(): void
    {
        foreach ($this->fruitTrees as $fruitTree) {
            $fruitTree->collectFruits();
        }
    }

    /**
     * Получения кол-ва всех фруктов
     * @return int[]
     */
    public function getFruitCounts(): array
    {
        $appleCount = 0;
        $pearCount = 0;
        foreach ($this->fruitTrees as $fruitTree) {
            if ($fruitTree->getType() == 'apple') {
                $appleCount += $fruitTree->getFruitCount();
            } elseif ($fruitTree->getType() == 'pear') {
                $pearCount += $fruitTree->getFruitCount();
            }
        }
        return array('apples' => $appleCount, 'pears' => $pearCount);
    }

    /**
     * Определение веса фруктов
     * @return int
     */
    public function getTotalWeight(): int
    {
        $appleWeight = rand(150, 180);
        $pearWeight = rand(130, 170);
        return $this->getFruitCounts()['apples'] * $appleWeight + $this->getFruitCounts()['pears'] * $pearWeight;
    }
}