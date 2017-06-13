<?php 

if (!function_exists('str_after_last')) {
    /**
     * Return the remainder of a string after a given value.
     *
     * @author Luke Watts
     *
     * @param  string $search
     * @param  string $subject
     *
     * @return string
     */
    function str_after_last($search, $subject)
    {
        if ($search == '') {
            return $subject;
        }

        $pos = strrpos($subject, $search);
        if ($pos === false) {
            return $subject;
        }

        return substr($subject, $pos + strlen($search));
    }
}