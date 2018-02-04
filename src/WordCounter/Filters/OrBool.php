<?php

namespace WordCounter\Filters;

class OrBool implements IFilter
{
    private $filterOne;
    private $filterTwo;

    public function __construct(IFilter $filterOne, IFilter $filterTwo)
    {
        $this->filterOne = $filterOne;
        $this->filterTwo = $filterTwo;
    }

    public function filterWords(array $wordsList): array
    {
        return array_merge($this->filterOne->filterWords($wordsList), $this->filterTwo->filterWords($wordsList));
    }
}
