<?php

/**
 * PHP: Array, Associative Array
 * Python: List, Dictionary
 */

function array_setdefault(Array &$array, $key, $default = NULL)
{
    if(!array_key_exists($key, $array)){
       $array[$key] = $default;
    }

    return $array[$key];
}

function array_update(Array &$firstArray, $element)
{
    if (is_array($element)) {
        return array_merge($firstArray, $element);
    }
    $firstArray[] = $element;
    return $firstArray;
}