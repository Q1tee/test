<?php

namespace App\Factories;

use App\Enums\GeneratorEnum;
use App\Services\Generator\RandomCardDeckGenerator;
use App\Services\Generator\RandomCoinGenerator;
use App\Services\Generator\RandomDiceGenerator;
use App\Services\Item\CardDeckItem;
use App\Services\Item\CoinItem;
use App\Services\Item\DiceItem;

class GeneratorFactory
{
    public function getGenerator(GeneratorEnum $enum): string
    {
        switch ($enum) {
            case GeneratorEnum::RandomCoinGenerator:
                return (new RandomCoinGenerator())->createGenerator(new CoinItem());
            case GeneratorEnum::RandomDiceGenerator:
                return (new RandomDiceGenerator())->createGenerator(new DiceItem());
            case GeneratorEnum::RandomCardDeckGenerator:
                return (new RandomCardDeckGenerator())->createGenerator(new CardDeckItem());
            default:
                throw new \Exception("Unknown generator");
        }
    }
}