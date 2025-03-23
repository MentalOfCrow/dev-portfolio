<?php
// Initialisation du site
require_once __DIR__ . '/backend/init.php';

// Chargement de l'autoloader de Composer s'il existe
$autoloadFile = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadFile)) {
    require_once $autoloadFile;
}

// Configuration de la session avant tout
session_start();

// Récupération de l'URL demandée
$request = $_SERVER['REQUEST_URI'];

// Suppression des query strings éventuels
$request = strtok($request, '?');

// Routage simple
switch ($request) {
    case '/':
    case '/home':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/home.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/about':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/about.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/skills':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/skills.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/projects':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/projects.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/contact':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/contact.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/cv':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/cv.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/mentions-legales':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/mentions-legales.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    case '/politique-confidentialite':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/politique-confidentialite.php';
        require_once __DIR__ . '/views/partials/footer.php';
        break;
    default:
        http_response_code(404);
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        echo "<main class='container'><h1>Page non trouvée</h1><p>La page que vous recherchez n'existe pas.</p></main>";
        require_once __DIR__ . '/views/partials/footer.php';
        break;
} 