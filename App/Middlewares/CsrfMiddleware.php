<?php

namespace App\Middlewares;

use Closure;
use Maya\Http\Request;

class CsrfMiddleware extends Middleware
{
    protected array $excludedUrls = [];

    public function handle(Request $request, Closure $next)
    {
        if ($request->method() !== 'GET') {
            foreach ($this->excludedUrls as $excludedUrl) {
                if (str_starts_with($request->uri(), $excludedUrl)) {
                    $next($request);
                }
            }
            if (!hash_equals(session('CSRF_TOKEN'), ($request->input('CSRF_TOKEN') ?? ''))) {
                abort(403, 'Invalid CSRF token');
            } else {
                session(['CSRF_TOKEN' => token()->CSRF()]);
            }
        }
        $next($request);
    }
}
