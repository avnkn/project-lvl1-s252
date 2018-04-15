<?php
namespace BrainGames\Games\Balance;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Balance the given number.";
    $gameData = function () {
        $randNum = rand(1, 1000);
        $arrNum = str_split($randNum);
        sort($arrNum);
        $lastInd = count($arrNum) - 1;
        while (($arrNum[$lastInd] - $arrNum[0]) > 1) {
            --$arrNum[$lastInd];
            ++$arrNum[0];
            sort($arrNum);
        }
        $arrForGame["quer"] = $randNum;
        $arrForGame["answ"] = implode('', $arrNum);
        return $arrForGame;
    };
    render($desc, $gameData);
}
