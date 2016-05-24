<?php
    function checkIdentifier($identifier)
    {
        $isIdentifier = (!empty($identifier) && ctype_alpha($identifier[0]));
        if ($isIdentifier)
        {
            $i = 1;
            while ($i < strlen($identifier))
            {
                $symbol = $identifier[$i];
                if (!ctype_alpha($symbol) && !is_numeric($symbol))
                {
                    $isIdentifier = false;
                    $reason = "Error: " . ($i + 1) . " symbol ('" . $symbol . "'" . ") is not a letter or digit";
                    break;
                }
                ++$i;
            }
        }
        else
        {
            $reason = "Error: the fist symbol must be a letter";
        }
        echo($isIdentifier ? "Valid identifier" : $reason);
    }