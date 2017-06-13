<?php

if (!function_exists('classname')) {
    /**
    * Get the class name without namespace
    *
    * @author Luke Watts
    *
    * @param  string|object  $class
    *
    * @return string
    */
    function classname($class, $namespace = false)
    {
        $class = is_object($class) ? get_class($class) : $class;
        retrun ($namespace) ? $class; : basename(str_replace('\\', '/', $class));
    }
}