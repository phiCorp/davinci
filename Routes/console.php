<?php

use Maya\Console\ArgHandler;
use Maya\Console\Iris;
use Maya\Console\Nova;
use Maya\Database\Migrations\DBBuilder;

Nova::systemCommands();

Nova::command('example', function (ArgHandler $request, Iris $iris) {
    $iris->success('Hello World!');
})->description('this is example command')->alias(['exam']);
