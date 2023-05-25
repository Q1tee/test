<?php

namespace App\Interfaces;

interface GameGeneratorInterface
{
    public function createGenerator(ItemInterface $item): string;
}
