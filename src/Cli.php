<?php
namespace BrainGames\Cli;

use function \cli\line;

function run($description = NULL)
{
    line('Welcome to the Brain Game!');
    if($description) line($description);
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    return $name;
}
