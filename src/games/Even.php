<?php
namespace BrainGames\Games\Even;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Answer \"yes\" if number even otherwise answer \"no\".\n";
    $arr_data = [];
    for ($i=0; $i < 3; $i++) {
        $x = rand(1, 100);
        $x%2 == 0 ? $cor_answ = "yes" : $cor_answ ="no";
        $arr_data[$x] = $cor_answ;
    }
    render($desc, $arr_data);
}
