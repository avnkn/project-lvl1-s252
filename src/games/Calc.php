<?php
namespace BrainGames\Games\Calc;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "What is the result of the expression?";
    $gameData = function () {
        $randNum1 = rand(1, 100);
        $randNum2 = rand(1, 100);
        $randAct = rand(1, 3);
        switch ($randAct) {
            case 1:
                $strAct = "+";
                $corAnsw = $randNum1 + $randNum2;
                break;
            case 2:
                $strAct = "-";
                $corAnsw = $randNum1 - $randNum2;
                break;
            case 3:
                $strAct = "*";
                $corAnsw = $randNum1 * $randNum2;
        }
        $arrForGame["quer"] = "$randNum1 $strAct $randNum2";
        $arrForGame["answ"] = $corAnsw;
        return $arrForGame;
    };
    render($desc, $gameData);
}
