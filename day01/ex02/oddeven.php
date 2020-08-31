#!/usr/bin/php
<?php
    while (1)
    {
        echo "Enter a number: ";

        $array = fgets(STDIN);

        $array = trim($array);
        if (is_numeric($array))
        {
            if ($array % 2 == 0) 
            {
                echo ("The number ".$array." is even\n");
            }
            else
                echo ("The number ".$array." is odd\n");
        }
        else 
        {
            if (feof(STDIN))
            {
                echo "\n";
                exit();
            }
            else
                echo "'$array' is not a number\n";
        
        }
    }

?>