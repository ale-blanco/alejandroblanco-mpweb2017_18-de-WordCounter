<?php

namespace WordCounter;

use WordCounter\Filters\IFilter;

class Counter
{
    private $wordsList;

    public function __construct(string $textToCount)
    {
        $this->wordsList = preg_split('/[\s,:;\.]+/', $textToCount, -1, PREG_SPLIT_NO_EMPTY);
        if ($this->wordsList === false) {
            throw new \Exception('Error al cortar el texto en palabras');
        }
    }

    public function countWords(?IFilter $filter = null): int
    {
        $listWords = ($filter !== null) ? $filter->filterWords($this->wordsList) : $this->wordsList;
        return count($listWords);
    }
}
