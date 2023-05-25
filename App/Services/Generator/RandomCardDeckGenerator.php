<?php

namespace App\Services\Generator;

use App\Interfaces\GameGeneratorInterface;
use App\Interfaces\ItemInterface;

class RandomCardDeckGenerator implements GameGeneratorInterface
{
    public function createGenerator(ItemInterface $item): string
    {
        $array = $item->getItem();

        return $array[0][array_rand($array[0])] . ' ' . $array[1][array_rand($array[1])];
    }
}