<?php
namespace BrainGames\Games\Balance;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "Balance the given number.\n";
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
        $arr_data[$arg] = $cor_answ;
    }
    render($desc, $arr_data);
}
