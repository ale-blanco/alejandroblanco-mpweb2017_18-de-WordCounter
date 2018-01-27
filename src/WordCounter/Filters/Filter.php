<?php

namespace WordCounter\Filters;

abstract class Filter
{
    private $previousFilter;

    public function __construct(?Filter $previousFilter)
    {
        $this->previousFilter = $previousFilter;
    }

    protected abstract function isValidWord(string $word): bool;

    public function filterWords(array $wordsList): array
    {
        $preFilterList = ($this->previousFilter !== null)
            ? $this->previousFilter->filterWords($wordsList)
            : $wordsList;
        return array_filter($preFilterList, [$this, 'isValidWord']);
    }
}
