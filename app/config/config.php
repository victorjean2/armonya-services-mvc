<?php

define('BASE_URL', 'index.php?route=');

define('ROOT_PATH', dirname(__DIR__, 2));

define('VIEW_PATH', ROOT_PATH . '/app/views');

function route(string $routeName): string
{
    return BASE_URL . urlencode($routeName);
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function isActive(string $routeName): string
{
    $currentRoute = $_GET['route'] ?? 'home';

    return $currentRoute === $routeName ? 'aria-current="page"' : '';
}