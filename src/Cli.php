<?php
namespace BrainGames\Cli;

use function \cli\line;

function run($description = null)
{
    line('Welcome to the Brain Game!');
    if ($description) {
        line("$description\n");
    }
    $name = \cli\prompt('May I have your name?');
    line("Hello, %s!\n", $name);
    return $name;
}
