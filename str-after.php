<?php 

if (!function_exists('str_after')) {
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
    function str_after($search, $subject)
    {
        if ($search == '') {
            return $subject;
        }

        $pos = strpos($subject, $search);
        if ($pos === false) {
            return $subject;
        }

        return substr($subject, $pos + strlen($search));
    }
}