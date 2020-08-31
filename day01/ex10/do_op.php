#!/usr/bin/php
<?php
if ($argc != 4)
{
    echo "Incorrect Parameters\n";
    exit;
}
$first = intval(trim($argv[1]));
$operation = trim($argv[2]);
$second = intval(trim($argv[3]));
if (!in_array($operation, ['+', '-', '*', '/', '%']))
    exit(1);
if ($second === 0 && in_array($operation, ['/', '%']))
    exit(1);
if ($operation == '+')
    echo $first + $second . "\n";
elseif ($operation == '-')
    echo $first - $second . "\n";
elseif ($operation == '*')
    echo $first * $second . "\n";
elseif ($operation == '/')
    echo $first / $second . "\n";
elseif ($operation == '%')
	echo $first % $second . "\n";
?>