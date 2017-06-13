<?php

if (!function_exists('classname')) {
    /**
     * Get the class name without namespace
     *
     * @author Luke Watts
     *
     * @param  string|object $class
     * @param  bool          $namespace
     *
     * @return string
     */
    function classname($class, $namespace = false)
    {
        $class = is_object($class) ? get_class($class) : $class;

        if ($namespace) {
            $class = str_replace(['/', '-', '_'], ' ', $class);

            $title_case = ucwords($class);
            $explode = explode(' ', $title_case);

            $remove_empties = array_filter($explode, function ($word) {
                return (!empty($word));
            });

            return implode('\\', $remove_empties);
        } else {
            return basename(str_replace('\\', '/', $class));
        }

    }
}