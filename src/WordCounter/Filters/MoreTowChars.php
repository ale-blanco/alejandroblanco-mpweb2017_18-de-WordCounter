<?php

namespace WordCounter\Filters;

class MoreTowChars extends Filter
{
    protected function isValidWord(string $word): bool
    {
        return mb_strlen($word, 'UTF-8') > 2;
    }
}
