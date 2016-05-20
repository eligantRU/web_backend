<?php
    function getRemovedExtraBlanksString($str)
    {
        $str = trim($str);
        $string = "";
        $isSpace = false;
        for ($i = 0; $i < strlen($str); ++$i)
        {
            if ($str[$i] == ' ')
            {
                if($isSpace == false)
                {
                    $string = $string . $str[$i];
                }
                $isSpace = true;
            }
            else
            {
                $string = $string . $str[$i];
                $isSpace = false;
            }
        }
        return $string;
    }