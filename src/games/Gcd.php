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
    $gameData = function () {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $arrForGame["quer"] = "$randNum1 $randNum2";
        $arrForGame["answ"] = gcd($randNum1, $randNum2);
        return $arrForGame;
    };
    render($desc, $gameData);
}
