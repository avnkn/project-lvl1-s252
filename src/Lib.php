<?php
namespace BrainGames\Lib;

use function \cli\line;

function brainGamesOne($name)
{
    for ($i=0; $i < 3; $i++) {
        $x = rand(1, 100);
        line("Question: %s", $x);
        $answer = \cli\prompt('Your answer');
        $x%2 == 0 ? $cor_answ = "yes" : $cor_answ ="no";
        if ($answer == $cor_answ) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$cor_answ'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
