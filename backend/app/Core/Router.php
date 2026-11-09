<?php
declare(strict_types=1);

namespace Inu\Core;

final class Router
{
    /** @var array<string, callable> */
    private array $routes = [];

    public function get(string $path, callable $handler): void
    {
        $this->routes['GET ' . $path] = $handler;
    }

    public function dispatch(string $method, string $path): void
    {
        $key = strtoupper($method) . ' ' . $path;
        if (!isset($this->routes[$key])) {
            http_response_code(404);
            header('Content-Type: application/json; charset=utf-8');
            echo json_encode(['ok' => false, 'error' => 'not_found']);
            return;
        }
        ($this->routes[$key])();
    }
}
