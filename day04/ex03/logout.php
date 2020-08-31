<?php

        /*
        This wont take any arguments but will create a new session and set to the $_SESSION variable loggued_on_user
        and empty string.
        */

        session_start();
        $_SESSION["loggued_on_user"] = "";
?>