<?php
declare(strict_types=1);

namespace Inu\Controllers;

final class HealthController
{
    public function __invoke(): void
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode([
            'ok' => true,
            'service' => 'inu-ai-api',
            'version' => '1.0.0',
            'mode' => 'foundation',
        ], JSON_UNESCAPED_UNICODE);
    }
}
