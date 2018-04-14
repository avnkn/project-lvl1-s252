<?php
namespace BrainGames\LogicGame;

use function \cli\line;
use function BrainGames\Cli\run;

function render($desc, $func){
    $name = run($desc);
    for ($i=0; $i < 3; $i++) {
        $q_a = $func();
        $query = key($q_a);
        line("Question: %s", $query);
        $answer = \cli\prompt('Your answer');
        if ($answer == $q_a[$query]) {
            line('Correct!');
        } else {
            line("'$answer' is wrong answer ;(. Correct answer was '$q_a[$query]'.");
            line("Let's try again, $name!");
            exit;
        }
    }
    line("Congratulations, $name!");
}
