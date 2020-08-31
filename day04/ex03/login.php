<?php
        /*
        requires the auth.php file to see if its the right user
        starts session
        validates the combination of login and passwd, then stores it in the $_SESSION a variable loggued_on_user 
        that either contains the login of the user that put the correct login/passwd combo 
        OR
        an empty string
        */

        require_once('auth.php');
        session_start();
        if ($_GET["login"] && $_GET["passwd"] && auth($_GET["login"], $_GET["passwd"]))
        {
            $_SESSION["loggued_on_user"] = $_GET["login"];
            echo "OK\n";
        }
        else
        {
            $_SESSION["loggued_on_user"] = "";
            echo "ERROR\n";
        }
?>