<?php
namespace BrainGames\Games\Even;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Answer \"yes\" if number even otherwise answer \"no\".\n";
    $func = function(){
        $x = rand(1, 100);
        $x%2 == 0 ? $cor_answ = "yes" : $cor_answ ="no";
        $arr_data[$x] = $cor_answ;
        return $arr_data;
    };
    render($desc, $func);
}
