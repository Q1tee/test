<?php

namespace App\Services\Generator;

use App\Interfaces\GameGeneratorInterface;
use App\Interfaces\ItemInterface;

class RandomCoinGenerator implements GameGeneratorInterface
{
    public function createGenerator(ItemInterface $item): string
    {
        $array = $item->getItem();

        return $array[array_rand($array)];
    }
}