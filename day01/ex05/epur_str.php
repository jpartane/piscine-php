#!/usr/bin/php
<?php
    if ($argc == 2)
    {
        $str = array_filter(explode(' ', $argv[1]));
        $ret = implode(" ", $str);
        echo $ret . "\n";
    }
?>