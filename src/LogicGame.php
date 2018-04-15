<?php
namespace BrainGames\LogicGame;

use function \cli\line;
use function BrainGames\Cli\run;

function render($desc, $gameData)
{
    $name = run($desc);
    for ($i=0; $i < 3; $i++) {
        $arrForGame = $gameData();
        line("Question: %s", $arrForGame["quer"]);
        $answer = \cli\prompt('Your answer');
        if ($answer == $arrForGame["answ"]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '{$arrForGame["answ"]}'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
