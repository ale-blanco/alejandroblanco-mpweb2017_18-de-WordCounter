<?php

use WordCounter\Counter;
use WordCounter\Filters\FirstCharVowel;
use WordCounter\Filters\MoreTowChars;
use WordCounter\Filters\NotBool;
use WordCounter\Filters\OrBool;
use WordCounter\Filters\WordInTheList;

require_once 'vendor/autoload.php';

define(
    'TEXT_TO_COUNT',
    'Esto es un texto molón que sirve como juego de pruebas para la kata de contar palabrejas. No me hagas un diseño de gañán ni de hiper-arquitecto. Que te veo, eh.'
);

$counter = new Counter(TEXT_TO_COUNT);
echo 'Palabras totales: ' . $counter->countWords() . PHP_EOL;


echo 'Palabras que empiecen por vocal: ' . $counter->countWords(new FirstCharVowel()) . PHP_EOL;

echo 'Palabras de más de dos caracteres: ' . $counter->countWords(new MoreTowChars()) . PHP_EOL;

echo 'En listado de palabras clave: ' . $counter->countWords(new WordInTheList()) . PHP_EOL;


echo 'Empiecen por vocal y tengan más de 2 caracteres: '
    . $counter->countWords(new FirstCharVowel(new MoreTowChars())) . PHP_EOL;

echo 'En listado de palabras clave que empiecen por vocal: '
    . $counter->countWords(new WordInTheList(new FirstCharVowel())) . PHP_EOL;

echo 'En listado de palabras clave que empiecen por vocal y tengan más de dos carácteres: '
    . $counter->countWords(new WordInTheList(new FirstCharVowel(new MoreTowChars()))) . PHP_EOL;

echo 'Palabras clave y que no empiezen por vocal: '
    . $counter->countWords(new WordInTheList(new NotBool(new FirstCharVowel()))) . PHP_EOL;

echo 'Palabras que no empiecen por vocal o que sí empiecen por vocal pero tengan mas de dos carácteres: '
    . $counter->countWords(new OrBool(
        new NotBool(new FirstCharVowel()),
        new FirstCharVowel(new MoreTowChars())
    )) . PHP_EOL;