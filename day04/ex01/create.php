<?php

    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] == "OK")
    {
        if (!file_exists('../htdocs/'))      //check if the htdocs file exist
        {
            mkdir('../htdocs/');
        }
        if (!file_exists('../htdocs/private'))
        {
            mkdir('../htdocs/private'); 
        }
        $user_database = unserialize(file_get_contents('../htdocs/private/passwd'));
        // unserialize takes a single serialized variable and converts it back into a PHP value
        // (serialization is the process of translating data structures or object state into a format that can be stored
        // for example in a file or memory buffer)

        $exist = false;
        foreach ($user_database as $key => $user)
        {
            if ($user['login'] === $_POST['login'])
            {
                $exist = true;
            }
        }
        if ($exist)
        {
            echo "ERROR\n";
        } 
        else
        {
            $user_database[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
            file_put_contents('../htdocs/private/passwd', serialize($user_database));
            echo "OK\n";
        }
    }
        else
        {
            echo "ERROR\n";
        }
    ?>