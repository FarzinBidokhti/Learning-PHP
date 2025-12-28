<?php

// 54325

// $x = 4;

// function ranCode($x)
// {
// $min = pow(10, $x - 1);
// }

function generateCode($cnt)
{
    $txt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

    $code = '';
    for ($i = 0; $i < $cnt; $i++) {
        $code .= $txt[rand(0, strlen($txt) - 1)];
        // $code = $code . $txt[rand(0, strlen($txt) - 1)];
    }
    // TODO::test
    return $code;
}
echo generateCode(10);
