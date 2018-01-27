<?php

use WordCounter\Counter;
use WordCounter\Filters\FirstCharVowel;
use WordCounter\Filters\MoreTowChars;
use WordCounter\Filters\WordInTheList;

require_once 'vendor/autoload.php';

define(
    'TEXT_TO_COUNT',
    'Esto es un texto molón que sirve como juego de pruebas para la kata de contar palabrejas. No me hagas un diseño de gañán ni de hiper-arquitecto. Que te veo, eh.'
);

$counter = new Counter(TEXT_TO_COUNT);
echo 'Palabras totales: ' . $counter->getCountOfWord(null) . PHP_EOL;

echo 'Palabras que empiecen por vocal: ' . $counter->getCountOfWord(new FirstCharVowel()) . PHP_EOL;

echo 'Palabras de más de dos caracteres: ' . $counter->getCountOfWord(new MoreTowChars()) . PHP_EOL;

echo 'En listado de palabras clave: ' . $counter->getCountOfWord(new WordInTheList()) . PHP_EOL;