<?php

use Maya\Console\ArgHandler;
use Maya\Console\Iris;
use Maya\Console\Nova;
use Maya\Database\Migrations\DBBuilder;

Nova::systemCommands();

Nova::command('welcome', function (ArgHandler $request, Iris $iris) {
    $iris->info('Welcome to Davinci Framework');
    $iris->simple()->info("to run the server, go to the root directory by using the command:");
    $iris->writeLine();
    $iris->writeLine('        cd ' . '"' . basePath() . '"');
    $iris->writeLine();
    $iris->simple()->info('then run the server using the command:');
    $iris->writeLine();
    $iris->writeLine('        php nova serve');
    $iris->writeLine();
})->description('this is welcome command')->alias(['w', 'welcome']);