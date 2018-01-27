<?php

namespace WordCounter\Filters;

class FirstCharVowel extends Filter
{
    protected function isValidWord(string $word): bool
    {
        return preg_match('/^[aeiouAEIOU]/', $word);
    }
}
