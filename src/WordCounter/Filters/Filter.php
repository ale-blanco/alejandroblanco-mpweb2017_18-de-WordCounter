<?php

namespace WordCounter\Filters;

abstract class Filter
{
    protected abstract function isValidWord(string $word): bool;

    public function filterWords(array $wordsList): array
    {
        return array_filter($wordsList, [$this, 'isValidWord']);
    }
}
