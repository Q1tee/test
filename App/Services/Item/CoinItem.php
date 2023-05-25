<?php

namespace App\Services\Item;

use App\Interfaces\ItemInterface;

class CoinItem implements ItemInterface
{
    public function getItem(): array
    {
        return ['Heads', 'Tails'];
    }
}