<?php
namespace BrainGames\Games\Prime;

use function BrainGames\LogicGame\render;

function isPrime($num)
{
    $sqrtNum = sqrt($num);
    for ($i=2; $i<=$sqrtNum; ++$i) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function game()
{
    $desc = 'Answer "yes" if number prime otherwise answer "no".';
    $gameData = function () {
        $arrForGame["quer"] = rand(2, 100);
        isPrime($arrForGame["quer"]) ? $arrForGame["answ"] = "yes" : $arrForGame["answ"] = "no";
        return $arrForGame;
    };
    render($desc, $gameData);
}
