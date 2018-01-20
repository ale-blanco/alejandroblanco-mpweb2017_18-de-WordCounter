<?php

namespace WordCounter;

class Counter
{
    public function getCountOfWord(string $textToCount): int
    {
        $listWords = preg_split('/[\s,:;\.]+/', $textToCount, -1, PREG_SPLIT_NO_EMPTY);
        if ($listWords === false) {
            throw new \Exception('Error al cortar el texto en palabras');
        }

        return count($listWords);
    }
}
