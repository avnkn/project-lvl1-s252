<?php
namespace BrainGames\LogicGame;

use function \cli\line;
use function BrainGames\Cli\run;

function render($desc, $arr_data){
    $name = run($desc);
    foreach ($arr_data as $query => $cor_answ) {
        line("Question: %s", $query);
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
