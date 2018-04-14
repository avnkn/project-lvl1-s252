<?php
namespace BrainGames\Games\Gcd;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Find the greatest common divisor of given numbers.\n";
    for ($i=0; $i < 3; $i++) {
        $arg1 = rand(1, 100);
        $arg2 = rand(1, 100);
        $arg1 > $arg2 ? $arg_min = $arg2 : $arg_min = $arg1;
        for ($j=0; $j < $arg_min; $j++) {
            $del = $arg_min - $j;
            if ($arg1%$del == 0 and $arg2%$del == 0) {
                $cor_answ = $del;
                $arg_min = 0;
            }
        }
        $arr_data["$arg1 $arg2"] = $cor_answ;
    }
    render($desc, $arr_data);
}
