<?php

use WordCounter\Counter;

require_once 'vendor/autoload.php';

define(
    'TEXT_TO_COUNT',
    'Esto es un texto molón que sirve como juego de pruebas para la kata de contar palabrejas. No me hagas un diseño de gañán ni de hiper-arquitecto. Que te veo, eh.'
);

$counter = new Counter();
echo 'Palabras totales: ' . $counter->getCountOfWord(TEXT_TO_COUNT) . PHP_EOL;
