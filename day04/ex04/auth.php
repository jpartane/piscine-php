<?php

    /*
    Checks if the inputted login/password are correct, if yes return true, if not return false and block access
    */

    function auth($login, $passwd) {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists("../private/passwd")) {
            file_put_contents("../private/passwd", null);
        }
        $account = unserialize(file_get_contents("../private/passwd"));
        if ($account) {
            foreach ($account as $k => $v) {
                if ($v["login"] === $login && $v["passwd"] === hash('whirlpool', $passwd))
                    return true;
            }
        }
        return false;
    }
?>