<?php
    function  getStringWithoutLastChar($str)
    {
        $str = strval($str);
        $string = "";
        for ($i = 0; $i < strlen($str) - 1; $i++)
        {
            $string = $string . $str[$i];
        }
        return $string;
    }