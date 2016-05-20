<?php
    function getPassStrength($pass)
    {   
        $strength = 0;
        if (ctype_alnum($pass))
        {
            $strength += getAllSymbolsStrength($pass);
            $strength += getDigitsStrength($pass);
            $strength += getUpDownRegisterStrength($pass);
            $strength += getOnlyDigitSymbolStrength($pass);
            $strength += getRepeatingCharStrength($pass);
        }
        return $strength;
    }

    function getAllSymbolsStrength($pass)
    {
        $strength = 4 * strlen($pass);
        return $strength;
    }

    function getDigitsStrength($pass)
    {
        $strength = 0;
        for ($i = 0; $i < strlen($pass); ++$i)
        {
            if (ctype_digit($pass[$i]))
            {
                $strength += 4;
            }
        }
        return $strength;
    }

    function getUpDownRegisterStrength($pass)
    {
        $strength = 0;
        for ($i = 0; $i < strlen($pass); ++$i)
        {
            if (ctype_upper($pass[$i]) || ctype_lower($pass[$i]))
            {
                $strength += ((strlen($pass) - 1) * 2);
            }
        }
        return $strength;
    }

    function getOnlyDigitSymbolStrength($pass)
    {
        $strength = 0;
        if (ctype_digit($pass) || ctype_alpha($pass))
        {
            $strength -= strlen($pass);
        }
        return $strength;
    }

    function getRepeatingCharStrength($pass)
    {
        $strength = 0;
        $n = 0;
        foreach (count_chars($pass, 1) as $i => $val)
        {
            if ($val > 1)
            {
                $n += $val;
            }
        }
        $strength -= $n;
        return $strength;
    }
