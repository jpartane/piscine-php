<?php
    /* First checck if there is anything in variables login or password
    then in user_database variable stores as array the unserialized passwd which it gets with file_get_contents.
    Now loops through each element in array, for every loop iteration the current array element is assigned to $user
    If the user login and password (which it whirls with hash) matches the ones in /private/passwd return TRUE
    otherwise return FALSE
    */

    function auth($login, $passwd)
    {
        if (!$login || !$passwd)
        {
            return false;
        }
        $user_database = unserialize(file_get_contents('../htdocs/private/passwd'));
        foreach ($user_database as $key => $user)
        {
            if ($user["login"] === $login && $user["passwd"] === hash('whirlpool', $passwd))
            {
                return true;
            }
        }
        return false;
    }
?>