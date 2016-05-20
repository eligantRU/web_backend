<?php
    function getLastChar($str)
    {
        if (!empty($str))
        {
            return $str[strlen($str)-1];
        }
        return "";
    }