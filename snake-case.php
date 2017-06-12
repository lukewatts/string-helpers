<?php

/**
 * Convers "UserRole" or "user-role" to "user_role"
 *
 * @author Luke Watts
 */
function snake_case($string)
{
    $regex = '/(?<!^)((?<![[:upper:]])[[:upper:]]|[[:upper:]](?![[:upper:]]))/';

    $string = str_replace('-', '_', $string);

    return implode('_', array_map(function ($word) {
        return strtolower($word);
    }, explode(' ', preg_replace($regex, ' $1', $string))));
}
