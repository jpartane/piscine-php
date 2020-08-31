#!/usr/bin/php
<?php
    if ($argc < 1)
        exit();
    $array = explode(' ',preg_replace('/ +/',' ',trim($argv[1])));
    $tmp = $array[0];
    unset($array[0]);
    $array[] = $tmp;
        echo implode(" ", $array)."\n";
?>