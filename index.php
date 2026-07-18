<?php
declare(strict_types=1);

const SITE_NAME = 'Hugo Bisserier';
const SITE_URL = 'https://hugobisserier.com';

$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if (!in_array($requestMethod, ['GET', 'HEAD'], true)) {
    header('Allow: GET, HEAD');
    http_response_code(405);
    exit('Method Not Allowed');
}

header_remove('X-Powered-By');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

function escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function assetUrl(string $path): string
{
    $relativePath = ltrim($path, '/');
    $absolutePath = __DIR__ . '/' . $relativePath;
    $version = is_file($absolutePath) ? (string) filemtime($absolutePath) : '1';

    return escape('/' . $relativePath . '?v=' . rawurlencode($version));
}

function isCurrentPage(string $page): bool
{
    global $currentPage;
    return $currentPage === $page;
}

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rtrim($path, '/') ?: '/';

$routes = [
    '/' => 'home',
    '/home' => 'home',
    '/about' => 'about',
    '/skills' => 'skills',
    '/experiences' => 'experiences',
    '/projects' => 'projects',
    '/contact' => 'contact',
    '/cv' => 'cv',
    '/mentions-legales' => 'mentions-legales',
    '/politique-confidentialite' => 'politique-confidentialite',
];

$currentPage = $routes[$path] ?? '404';
$pageTitles = [
    'home' => 'Cybersécurité, infrastructure et développement',
    'about' => 'À propos',
    'skills' => 'Compétences',
    'experiences' => 'Expériences',
    'projects' => 'Projets',
    'contact' => 'Contact',
    'cv' => 'CV',
    'mentions-legales' => 'Mentions légales',
    'politique-confidentialite' => 'Politique de confidentialité',
    '404' => 'Page introuvable',
];
$pageTitle = $pageTitles[$currentPage];

if ($currentPage === '404') {
    http_response_code(404);
}

$securityHeaders = [
    "Content-Security-Policy: default-src 'self'; base-uri 'self'; form-action 'none'; frame-ancestors 'none'; object-src 'none'; script-src 'self'; style-src 'self'; img-src 'self' data:; font-src 'self'; connect-src 'self'; media-src 'none'; worker-src 'none'; manifest-src 'self'; upgrade-insecure-requests",
    'Referrer-Policy: strict-origin-when-cross-origin',
    'X-Content-Type-Options: nosniff',
    'X-Frame-Options: DENY',
    'Permissions-Policy: accelerometer=(), autoplay=(), camera=(), geolocation=(), gyroscope=(), microphone=(), payment=(), usb=()',
    'Cross-Origin-Opener-Policy: same-origin',
    'Cross-Origin-Resource-Policy: same-origin',
];

foreach ($securityHeaders as $header) {
    header($header);
}

if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https') {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}

require __DIR__ . '/views/partials/head.php';
require __DIR__ . '/views/partials/header.php';
require __DIR__ . '/views/pages/' . $currentPage . '.php';
require __DIR__ . '/views/partials/footer.php';
