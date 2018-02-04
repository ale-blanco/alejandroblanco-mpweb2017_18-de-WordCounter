<?php

namespace WordCounter\Filters;

class NotBool implements IFilter
{
    private $previousFilter;

    public function __construct(IFilter $previousFilter)
    {
        $this->previousFilter = $previousFilter;
    }

    public function filterWords(array $wordsList): array
    {
        $preFilterList = $this->previousFilter->filterWords($wordsList);
        return array_diff($wordsList, $preFilterList);
    }
}
