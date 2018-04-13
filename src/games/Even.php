<?php
namespace BrainGames\Games\Even;

use function \cli\line;
use function BrainGames\Cli\run;

function game()
{
    $desc_even = "Answer \"yes\" if number even otherwise answer \"no\".\n";
    $name = run($desc_even);
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
