<?php

namespace App\Providers;

use Maya\View\Composer;

class AppServiceProvider extends Provider
{
    public function boot()
    {
        Composer::view('*', function () {
            return [
                //
            ];
        });
    }
}
