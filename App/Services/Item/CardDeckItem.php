<?php

namespace App\Services\Item;

use App\Interfaces\ItemInterface;

class CardDeckItem implements ItemInterface
{
    public function getItem(): array
    {
        return [
            ['♥', '♦', '♣', '♠'],
            ['6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A']
        ];
    }
}