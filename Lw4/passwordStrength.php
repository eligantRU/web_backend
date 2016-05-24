<?php
    include ("/include/common.inc.php");


    if (ctype_alnum(getFromGet("password")))
    {
        echo(getPassStrength(getFromGet("password")));
    }
    else
    {
        echo("Warning: password was not found. U must write password to get a mark");
    }