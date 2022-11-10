<?php

function printDigitValue($num)
{
    $newnum = preg_replace('/[^0-9]/', '', (string)$num);
    $arrnum = str_split($newnum);

    for ($i = 0; $i < strlen($newnum); $i++) {
        $result = $arrnum[$i];
        for ($y = 1; $y < count($arrnum) - $i; $y++) {
            $result = $result . "0";
        }
        echo ($result . "<br>");
    }
}

printDigitValue("9.327.421");
