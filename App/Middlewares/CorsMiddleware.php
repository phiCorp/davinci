<?php

namespace App\Middlewares;

use Closure;
use Maya\Http\Request;

class CorsMiddleware extends Middleware
{
    private array $allowedOrigins;
    private array $allowedMethods;
    private array $allowedHeaders;
    private int $maxAge;

    public function __construct()
    {
        $this->allowedOrigins = ['*'];
        $this->allowedMethods = ['GET', 'POST', 'PUT', 'DELETE'];
        $this->allowedHeaders = ['Content-Type'];
        $this->maxAge = 86400;
    }

    public function handle(Request $request, Closure $next)
    {
        $this->setCorsHeaders();
        if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
            header('Access-Control-Max-Age: ' . $this->maxAge);
            header('Content-Length: 0');
            exit;
        } else {
            $next($request);
        }
    }

    private function setCorsHeaders(): void
    {
        $requestOrigin = $_SERVER['HTTP_ORIGIN'] ?? '';
        if (in_array('*', $this->allowedOrigins) || in_array($requestOrigin, $this->allowedOrigins)) {
            header('Access-Control-Allow-Origin: ' . $requestOrigin);
        }
        header('Access-Control-Allow-Methods: ' . implode(', ', $this->allowedMethods));
        header('Access-Control-Allow-Headers: ' . implode(', ', $this->allowedHeaders));
        header('Access-Control-Allow-Credentials: true');
    }
}
