<?php

use Maya\Database\Migrations\DBBuilder;
use Maya\Disk\Directory;
use Maya\Router\Web\Route;

/*
|--------------------------------------------------------------------------
| Register The Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => view('welcome'));


/*
|--------------------------------------------------------------------------
| Register The System Routes
|--------------------------------------------------------------------------
*/

Route::get('/dl/{dir}/{token}', function ($dir, $token) {
    $config = config('ASSETS.DL');

    abort_unless(array_key_exists($dir, $config['DIRECTORIES']), 403);

    $filePath = assetsPath("{$config['DIRECTORIES'][$dir]['PATH']}/$token.{$config['DIRECTORIES'][$dir]['EXT']}");

    abort_unless(filer()->exists($filePath), 404);

    $mimeType = $config['DIRECTORIES'][$dir]['MIME'] ?? 'application/octet-stream';

    $cache = $config['DIRECTORIES'][$dir]['CACHE'] ?? $config['DEFAULT_CACHE'];

    return response()->download($filePath, null, $mimeType, $cache);
})->name('dl');
