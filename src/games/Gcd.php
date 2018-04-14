<?php
namespace BrainGames\Games\Gcd;

use function BrainGames\LogicGame\render;

function gcd($a, $b)
{
    return $a == 0 ? abs($b) : gcd($b % $a, $a);
}

function game()
{
    $desc = "Find the greatest common divisor of given numbers.";
    $func = function () {
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        $arr_data["$arg1 $arg2"] = gcd($arg1, $arg2);
        return $arr_data;
    };
    render($desc, $func);
}
