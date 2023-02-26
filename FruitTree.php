<?php

namespace FruitGarden;

class FruitTree
{
    /**
     * Id дерева
     * @var int
     */
    protected int $id;
    /**
     *Тип дерева
     * @var string
     */
    protected string $type;
    /**
     * Кол-во фруктов
     * @var int
     */
    protected int $fruitCount;
    /**
     * @param $id
     * @param $type
     */
    public function __construct($id, $type)
    {
        $this->id = $id;
        $this->type = $type;
        $this->fruitCount = 0;
    }
    /**
     * Получение ID
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Получение типа
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Получение кол-ва
     * @return int
     */
    public function getFruitCount(): int
    {
        return $this->fruitCount;
    }

    /**
     * Сбор фруктов
     * @return void
     */
    public function collectFruits(): void
    {
        $fruitCount = 0;
        if ($this->type == 'apple') {
            $fruitCount = rand(40, 50);
        } elseif ($this->type == 'pear') {
            $fruitCount = rand(0, 20);
        }
        $this->fruitCount += $fruitCount;
    }
}
