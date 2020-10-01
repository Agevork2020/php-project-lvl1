<?php

namespace Brain\Games\Cli;

use function cli\line;
use function cli\prompt;

/** cпрашивает имя и здоровается */
function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
