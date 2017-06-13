<?php

if (!function_exists('str_ends_with')) {
	/**
     * Determine if a given string ends with a given substring.
     *
     * @author Luke Watts
     *
     * @param  string  		 $haystack
     * @param  string|array  $needles
     *
     * @return bool
     */
    function str_ends_with($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if (substr($haystack, -strlen($needle)) === (string) $needle) {
                return true;
            }
        }

        return false;
    }
}