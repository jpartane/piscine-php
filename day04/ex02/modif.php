<?php

        if ($_POST["login"] && $_POST["oldpw"] && $_POST["newpw"] && $_POST["submit"] && $_POST["submit"] == "OK"
        && file_exists('../htdocs/private/passwd'))
        {
            $user_database = unserialize(file_get_contents('../htdocs/private/passwd'));
            $exist = false;
            foreach ($user_database as $key => $value)
            {
                if ($value["login"] == $_POST["login"] && $value["passwd"] == hash('whirlpool', $_POST["oldpw"]))
                {
                    $exist = true;
                    $user_database[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
                }            
            }
            if ($exist)
            {
                    file_put_contents('../htdocs/private/passwd', serialize($user_database));
                    echo "OK\n";
            } 
            else 
            {
                echo "ERROR\n";
            }
        } 
        else 
        {
            echo "ERROR\n";
        }
?>