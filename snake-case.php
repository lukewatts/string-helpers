<?php

if (!function_exists('snake_case')) {
    /**
     * Convers "UserRole" or "user-role" to "user_role"
     *
     * @author Luke Watts
     *
     * @param string $string
     *
     * @return string
     */
    function snake_case($string)
    {
        $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

        $string = str_replace(['_', '-'], ' ', $string);

        return implode('_', array_map(function ($word) {
            return strtolower($word);
        }, array_filter(explode(' ', preg_replace($regex, ' $1', $string)), function ($word) {
            return (!empty($word));
        })));
    }
}
