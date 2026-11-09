<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/Core/Router.php';
require_once __DIR__ . '/../app/Controllers/HealthController.php';

use Inu\Core\Router;
use Inu\Controllers\HealthController;

$router = new Router();
$router->get('/api/health', new HealthController());

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', rtrim($path, '/') ?: '/');
