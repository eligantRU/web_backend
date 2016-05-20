<?php
    require_once('/include/common.inc.php');

    if(strlen(getFromGet("string")) == 0)
    {
        echo("Warning: string length = 0");
    }
    echo(getStringWithoutLastChar(getFromGet("string")));