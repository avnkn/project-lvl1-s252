<?php
namespace BrainGames\Games\Gcd;

use function \cli\line;
use function BrainGames\Cli\run;

function game()
{
    $desc_even = "Find the greatest common divisor of given numbers.\n";
    $name = run($desc_even);
    for ($i=0; $i < 3; $i++) {
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        $arg1 > $arg2 ? $arg_min = $arg2 : $arg_min = $arg1;
        for ($j=0; $j < $arg_min; $j++) {
            $del = $arg_min - $j;
            if ($arg1%$del == 0 and $arg2%$del == 0) {
                $cor_answ = $del; $arg_min = 0;
            }
        }
        line("Question: %s %s", $arg1, $arg2);
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
