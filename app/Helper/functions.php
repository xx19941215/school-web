<?php

function objProp($instance, $attr, $default = '')
{
    if (!$instance) return $default;
    return $instance->$attr ?? $default;
}

function prop($arr, $key, $default = '')
{
    return $arr[$key] ?? $default;
}