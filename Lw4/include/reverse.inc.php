<?php
    function getReverseString($str)
    {
        $string = "";
        for ($i = strlen($str) - 1; $i >= 0; --$i)
        {
            $string = $string . $str[$i];
        }
        return $string;
    }