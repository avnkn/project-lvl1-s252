<?php
namespace BrainGames\Games\Calc;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "What is the result of the expression?\n";
    $func = function(){
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        $act = rand(1, 3);
        switch ($act) {
            case 1:
                $act_str = "+";
                $cor_answ = $arg1 + $arg2;
                break;
            case 2:
                $act_str = "-";
                $cor_answ = $arg1 - $arg2;
                break;
            case 3:
                $act_str = "*";
                $cor_answ = $arg1 * $arg2;
        }
        $arr_data["$arg1 $act_str $arg2"] = $cor_answ;
        return $arr_data;
    };
    render($desc, $func);
}
