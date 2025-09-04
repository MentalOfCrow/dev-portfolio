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
// Gestion des documents PDF via /docs/<nom_du_fichier>
if (strpos($request, '/docs/') === 0) {
    // Nom demandé (peut contenir des espaces ou des caractères encodés)
    $requested = urldecode(substr($request, strlen('/docs/')));
    
    // Utiliser directement le nom demandé
    $filename = $requested;

    // Sécurisation: on n'autorise que le nom de fichier (pas de sous-répertoires)
    $filename = basename($filename);
    $filePath = __DIR__ . '/assets/docs/' . $filename;

    if (is_file($filePath)) {
        // Envoi du PDF directement (téléchargement forcé)
        header('Content-Type: application/pdf');
        header('Content-Length: ' . filesize($filePath));
        header('Content-Disposition: attachment; filename="' . $requested . '"');
        header('Cache-Control: private, max-age=0, must-revalidate');
        header('Pragma: public');
        readfile($filePath);
        exit;
    }

    // 404 si non trouvé
    http_response_code(404);
    echo "<main class='container'><h1>Fichier non trouvé</h1><p>Le document demandé est introuvable.</p></main>";
    exit;
}

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
    case '/experiences':
        require_once __DIR__ . '/views/partials/head.php';
        require_once __DIR__ . '/views/partials/header.php';
        require_once __DIR__ . '/views/pages/experiences.php';
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