<?php

use Maya\Router\Web\Route;

Route::get('users', function () {
    $data = [];

    for ($i = 1; $i <= 20; $i++) {
        $data[] = [
            'id' => $i,
            'name' => 'Test User ' . $i,
            'email' => 'user' . $i . '@example.com',
            'age' => rand(18, 60),
        ];
    }

    return response()->api(
        'success',
        $data,
        200,
        options: JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
    );
});
