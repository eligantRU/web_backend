<?php
    include ("/include/common.inc.php");

    if (isset($_GET["password"]))
    {
        $pass = $_GET["password"];
        if (ctype_alnum($pass))
        { 
            echo(pasStrength($pass));
        }
    }
