<?php
namespace BrainGames\Games\Even;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Answer \"yes\" if number even otherwise answer \"no\".";
    $gameData = function () {
        $randNum = rand(1, 100);
        $randNum % 2 == 0 ? $corAnsw = "yes" : $corAnsw ="no";
        $arrForGame["quer"] = $randNum;
        $arrForGame["answ"] = $corAnsw;
        return $arrForGame;
    };
    render($desc, $gameData);
}
