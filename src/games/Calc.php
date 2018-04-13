<?php
namespace BrainGames\Games\Calc;

use function \cli\line;
use function BrainGames\Cli\run;

function game()
{
    $desc_even = "What is the result of the expression?\n";
    $name = run($desc_even);
    for ($i=0; $i < 3; $i++) {
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        $act = rand(1, 3);
        switch ($act){
            case 1: $act_str = "+"; $cor_answ = $arg1 + $arg2; break;
            case 2: $act_str = "-"; $cor_answ = $arg1 - $arg2; break;
            case 3: $act_str = "*"; $cor_answ = $arg1 * $arg2;
        }
        line("Question: %s %s %s", $arg1, $act_str, $arg2);
        $answer = \cli\prompt('Your answer');
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
