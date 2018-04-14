<?php
namespace BrainGames\Games\Progression;

use function BrainGames\LogicGame\render;

function game()
{
    $desc = "What number is missing in this progression?";
    $func = function(){
        $a = rand(1,10);
        $b = rand(1,10);
        $r = rand(0,9);
        $q = "";
        for ($i=0; $i<10; ++$i) {
            if ($i != $r){
                $q = $q . ($a + $b * $i) . " ";
            } else {
                $q = $q . ".. ";
                $cor_answ = $a + $b * $i;
            }
        }
        $arr_data["$q"] = $cor_answ;
        return $arr_data;
    };
    render($desc, $func);
}
