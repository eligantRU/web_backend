<?php
    function strengthAllSymbols($pass)
    {   
        $prof = 4 * strlen($pass);
        return($prof);
    }

    function strengthDigits($pass)
    {   
    	$prof = 0;
	    for ($i = 0; $i < strlen($pass); $i++)
	    {
            if (ctype_digit($pass[$i]))
	        {
                $prof = $prof + 4;
	        }
        }
        return $prof;
    }

    function strengthRegistrUpOrDown($pass)
    {
        $prof = 0;
	    for ($i = 0; $i < strlen($pass); $i++)
	    {
            if ((ctype_upper($pass[$i])) || (ctype_lower($pass[$i])))
	        {
	            $prof += ((strlen($pass) - 1) * 2);
	        }
        } 
        return($prof);
    }

    function strengthOnlyDigitOrSymbol($pass)
    {   
	    $prof = 0;
        if ((ctype_digit($pass)) || (ctype_alpha($pass)))
	    {
	        $prof = $prof - strlen($pass);
	    }
        return $prof;
    }

    function strengthPovtorZnakov($pass)
    {   
	    $prof = 0;
        $n = 0;
        foreach (count_chars($pass, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $n = $n + $val;
            }
        }
        $prof = $prof - $n;
        return($prof);
    }
