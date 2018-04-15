<?php
namespace BrainGames\Games\Progression;

use function BrainGames\LogicGame\render;

function getElementArP($firstElem, $stepProgr, $numElem)
{
    return $firstElem + ($numElem - 1) * $stepProgr;
}
function game()
{
    $desc = "What number is missing in this progression?";
    $gameData = function () {
        $firstElem = rand(1, 10);
        $stepProgr = rand(1, 10);
        $randInd = rand(1, 10);
        $query = "";
        for ($i=1; $i<=10; ++$i) {
            if ($i != $randInd) {
                $query = $query . getElementArP($firstElem, $stepProgr, $i) . " ";
            } else {
                $query = $query . ".. ";
            }
        }
        $arrForGame["quer"] = $query;
        $arrForGame["answ"] = getElementArP($firstElem, $stepProgr, $randInd);
        return $arrForGame;
    };
    render($desc, $gameData);
}
