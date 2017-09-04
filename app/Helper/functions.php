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

function transName($schoolName = '')
{
    if ($schoolName == '') return '';

    if (strpos($schoolName, '市第')) {
        $schoolName = preg_replace('/市第/', '', $schoolName);
        $schoolName = preg_replace('/中学/', '中', $schoolName);

        return $schoolName;
    }

    if (strpos($schoolName, '县第')) {
        $schoolName = preg_replace('/县第/', '', $schoolName);
        $schoolName = preg_replace('/中学/', '中', $schoolName);

        return $schoolName;
    }

    return $schoolName;
}
