<?php

namespace App\Services\Item;

use App\Interfaces\ItemInterface;

class DiceItem implements ItemInterface
{
    public function getItem(): array
    {
        return [1, 2, 3, 4, 5, 6];
    }
}