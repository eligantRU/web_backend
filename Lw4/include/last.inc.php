<?php
    function getLastChar($str)
    {
        $ch = "";
        if (strlen($str))
        {
            $ch = $str[strlen($str) - 1];
        }
        return $ch;
    }