<?php
namespace BrainGames\Games\Prime;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = 'Answer "yes" if number prime otherwise answer "no".';
    $func = function () {
        $a = rand(1, 100);
        $i_m = sqrt($a);
        for ($i=2; $i<=$i_m; ++$i) {
            if ($a % $i == 0) {
                $arr_data[$a] = "no";
                return $arr_data;
            }
        }
        $arr_data[$a] = "yes";
        return $arr_data;
    };
    render($desc, $func);
}
