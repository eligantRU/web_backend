<?php
    function getRemovedExtraBlanksString($str)
    {
        $str = trim($str);
        $outString = "";
        $isSpace = false;
        for ($i = 0; $i < strlen($str); ++$i)
        {
            if ($str[$i] == ' ')
            {
                if ($isSpace == false)
                {
                    $outString = $outString . $str[$i];
                }
                $isSpace = true;
            }
            else
            {
                $outString = $outString . $str[$i];
                $isSpace = false;
            }
        }
        return $outString;
    }