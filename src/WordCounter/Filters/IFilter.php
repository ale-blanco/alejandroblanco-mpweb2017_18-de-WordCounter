<?php

namespace WordCounter\Filters;

interface IFilter
{
    public function filterWords(array $wordsList): array;
}