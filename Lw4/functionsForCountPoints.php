<?php
    function LengthPoints($string)
    {
        $n = strlen($string);
        return 4*$n;
    }
              
    function DigitsPoints($string)
    {                           
        $n = 0;
        $i = 0;                
        while ( $i < strlen ($string) )
        {
            $symbol = $string[$i];
            if ( is_numeric($symbol) )
            {
              $n++;
            } 
            $i++;
        }
        return $n*4;
    }
              
    function UpCasePoints($string)
    {                           
        $n = 0;
        $i = 0;                
        while ( $i < strlen($string) )
        {
            $symbol = $string[$i];
            if ( ctype_upper($symbol) )
            {
                $n++;
            } 
            $i++;
        }
        if ( $n > 0 )
        {
            $len = strlen($string);
            return ($len-$n)*2;
        }    
    }
              
    function DownCasePoints($string)
    {                           
        $n = 0;
        $i = 0;                
        while ( $i < strlen($string) )
        {
            $symbol = $string[$i];
            if ( ctype_lower($symbol) )
            {
                $n++;
            } 
            $i++;
        }
        if ( $n > 0 )
        {
            $len = strlen($string);
            return ($len-$n)*2;
        }    
    }
              
    function OnlyLettersPoints($string)
    {
        $n = 0;
        if ( ctype_alpha($string) )
        {
            $n = strlen($string);
        }
        return $n; 
    } 
              
              
    function OnlyDigitsPoints($string)
    {
        $n = 0;
        if ( is_numeric($string) )
        {
            $n = strlen($string);
        }
            return $n; 
    } 
              
    function RepeatPoints($string)
    {
        $n = 0;
        foreach (count_chars($string, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $n += $val;
            }                        
        }
        return $n;
    }
?>