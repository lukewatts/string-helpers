<?php

if (!function_exists('kebab_case')) {
    /**
     * Convert a string to kebab case.
     *
     * @param  string $string
     * @return string
     */
    function kebab_case($string)
    {
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        $string = str_replace(['_', '-'], ' ', $string);

        return implode('-', array_map(function ($word) {
            return strtolower($word);
        }, explode(' ', preg_replace($regex, '$1', $string))));
    }
}