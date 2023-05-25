<?php

/**
 * Щоб запустити гру, потрібно в консолі з кореневої папки додатка прописати "php index.php".
 *
 * Перед вами з'явиться вибір, який із генераторів ви хочете вибрати. Щоб зробити вибір, потрібно в консолі прописати, наприклад, "2".
 *
 * Щоб створити новий генератор до вже наявного предмета (наприклад, ми хочемо, щоб у гральної кістки частіше випадали парні цифри),
 * потрібно в папці App/Services/Generator створити новий клас генератора, який реалізує інтерфейс App/Interfaces/GeneratorInterface.
 * Додати в App/Enums/GeneratorEnum нове значення генератора. І наприкінці у фабрику App/Factoiries/GeneratorFactory додати генератор.
 *
 * Якщо ми хочемо створити новий предмет, то потрібно в папці App/Services/Item створити новий клас, який реалізує
 * інтерфейс App/Interfaces/ItemInterface і повторити попередній крок.
 */

require_once 'autoload.php';

echo 'Chose generator!' . PHP_EOL;

foreach (App\Enums\GeneratorEnum::cases() as $enum) {
    echo $enum->name() . ': ' . $enum->value . PHP_EOL;
}

while (true) {
    $input = trim(fgets(STDIN));

    $enum = App\Enums\GeneratorEnum::tryFrom($input);

    if ($enum) {

        try {
            $answer = (new \App\Factories\GeneratorFactory())->getGenerator($enum);

            echo 'Your random value: ' . $answer . PHP_EOL;
        } catch (Exception $e) {
            echo 'Sorry (';
        }

        break;
    }

    echo "Value is not correct. Please try again!" . PHP_EOL;
}
