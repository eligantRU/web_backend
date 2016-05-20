<?php
    function  getStringWithoutLastChar($str)
    {
        $outString = "";
        for ($i = 0; $i < strlen($str) - 1; ++$i)
        {
            $outString .= $str[$i];
        }
        return $outString;
    }