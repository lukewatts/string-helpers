<?php

if (! function_exists('e')) {
    /**
     * Escape HTML special characters in a string using standard defaults
     *
     * @author Luke Watts
     *
     * @param  string  $value
     *
     * @return string
     */
    function e($value)
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
    }
}