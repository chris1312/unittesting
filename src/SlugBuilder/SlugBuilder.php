<?php

namespace MyProject\SlugBuilder;

class SlugBuilder
{
    public function slugify(string $text): string
    {
        if (empty($text)) {
            throw new \Exception('Text cannot be empty');
        }

        $slug = transliterator_transliterate('Any-Latin; Latin-ASCII;', $text);
        $slug = str_replace(' ', '-', $slug);
        $slug = strtolower($slug);

        return $slug;
    }
}
