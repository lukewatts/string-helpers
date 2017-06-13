<?php

if (!function_exists('studly_case')) {
	/**
     * Convert a value to studly caps case.
     *
     * @author Luke Watts
     *
     * @param  string  $value
     *
     * @return string
     */
    function studly_case($value)
    {
        $value = ucwords(str_replace(['-', '_'], ' ', $value));

        return str_replace(' ', '', $value);
    }
}