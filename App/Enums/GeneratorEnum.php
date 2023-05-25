<?php

namespace App\Enums;

enum GeneratorEnum: int
{
    case RandomCoinGenerator = 1;
    case RandomDiceGenerator = 2;
    case RandomCardDeckGenerator = 3;

    public function name(): string
    {
        return implode(' ', preg_split('/(?=[A-Z])/', $this->name));
    }
}
