<?php

function prop($instance, $attr, $default = '')
{
    if (!$instance) return $default;
    return $instance->$attr ?? $default;
}