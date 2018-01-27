<?php

namespace WordCounter\Filters;

class WordInTheList extends Filter
{
    private const KEYWORDS = ['palabrejas', 'gañán', 'hiper-arquitecto', 'que', 'eh'];

    protected function isValidWord(string $word): bool
    {
        return in_array(strtolower($word), self::KEYWORDS);
    }
}
