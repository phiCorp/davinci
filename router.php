<?php

$requestUri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$filePath = __DIR__ . '/public' . $requestUri;

if (is_file($filePath)) {
    $mimeType = mime_content_type($filePath);
    header("Content-Type: $mimeType");
    readfile($filePath);
    exit;
}

require_once __DIR__ . '/public/index.php';
