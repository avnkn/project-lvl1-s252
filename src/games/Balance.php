<?php
namespace BrainGames\Games\Balance;

use function \cli\line;
use function BrainGames\Cli\run;

function game()
{
    $desc_even = "Balance the given number.\n";
    $name = run($desc_even);
    for ($i=0; $i < 3; $i++) {
        $arg = rand(1, 1000);
        $arr_arg = str_split($arg);
        sort($arr_arg);
        $f_k = count($arr_arg) - 1;
        while (($arr_arg[$f_k] - $arr_arg[0]) > 1) {
            --$arr_arg[$f_k];
            ++$arr_arg[0];
            sort($arr_arg);
        }
        $cor_answ = implode('', $arr_arg);
        line("Question: %s", $arg);
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
