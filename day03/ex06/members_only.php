<?php

    if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "Ilovemylittleponey")
    {
        $picture = base64_encode(file_get_contents("../img/42.png"));
        echo "<html><body>\nHello Zaz <br />\nimg src='data:image/png;base64,";
        echo ($picture);
        echo "'>\n</body></html>\n";
    }
    else
    {
        header ('WWW-Authenticate: Basic realm="UNIT_JPARTANE"');
        header ('HTTP/1.0 401 Unauthorized\n');
        echo "<html><body>That area is accessible for members only";
        echo "</body></html>";
    }
// Info about what base64 is: https://base64.guru/learn/what-is-base64
?>