<?php
    include("PasswordStrengthSecond.inc.php");

    function pasStrength($pass)
    {   
        $profit = 0;
        if (ctype_alnum($pass))
        {
            $profit += strengthAllSymbols($pass);
            $profit += strengthDigits($pass);
            $profit += strengthRegistrUpOrDown($pass);
            $profit += strengthOnlyDigitOrSymbol($pass);
            $profit += strengthPovtorZnakov($pass);
        }
        return $profit;
    }
