<?php

if (!function_exists('title_case')) {
    /**
     * Convert the given string to title case.
     *
     * @author Luke Watts
     *
     * @param  string  $value
     *
     * @return string
     */
    function title_case($value)
    {
        return mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
    }
}
