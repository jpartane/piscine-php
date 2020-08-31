#!/usr/bin/php
<?php
   $x = 1;
   while ($x < $argc)
   {
       echo ("$argv[$x]"."\n");
       $x++;
   }
?>