<?php
// Définition des constantes essentielles
define('ACCESS_GRANTED', true);
define('ACCESS', true);

// Entête pour forcer l'affichage en texte brut
header('Content-Type: text/plain');

echo "=== VÉRIFICATION DU DOCUMENT ROOT ===\n\n";

echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Chemin absolu du script: " . __FILE__ . "\n";
echo "Chemin relatif: " . $_SERVER['PHP_SELF'] . "\n\n";

// Vérifier si public est bien le document root
$expectedPath = '/public_html/public';
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Version compatible PHP 7.x
$publicCheck = (substr($documentRoot, -7) === '/public');

if ($publicCheck) {
    echo "✓ CORRECT: Le document root se termine bien par '/public'\n";
} else {
    echo "✗ ERREUR: Le document root ne se termine pas par '/public'\n";
    echo "  → Vous devez configurer le document root pour qu'il pointe vers le dossier 'public'\n";
    echo "  → Dans Hostinger, allez dans Hébergement > Paramètres > Document Root\n";
}

echo "\n=== VÉRIFICATION DES DOSSIERS CRITIQUES ===\n\n";

// Vérifier l'accès au dossier backend
$backendPath = dirname($_SERVER['DOCUMENT_ROOT']) . '/backend';
if (is_dir($backendPath)) {
    echo "✓ Le dossier backend est accessible\n";
} else {
    echo "✗ Le dossier backend n'est PAS accessible\n";
    echo "  → Vérifiez que la structure de dossiers est correcte\n";
}

// Vérifier l'existence des fichiers clés
$files = [
    'assets/js/main.js' => __DIR__ . '/assets/js/main.js',
    'assets/css/style.css' => __DIR__ . '/assets/css/style.css',
    'views/layouts/main.php' => __DIR__ . '/views/layouts/main.php',
    'index.php' => __DIR__ . '/index.php',
    '.htaccess' => __DIR__ . '/.htaccess'
];

echo "\n=== VÉRIFICATION DES FICHIERS CLÉS ===\n\n";

foreach ($files as $name => $path) {
    if (file_exists($path)) {
        echo "✓ $name: Trouvé\n";
    } else {
        echo "✗ $name: MANQUANT\n";
    }
}

echo "\n=== TESTS D'ACCÈS ===\n\n";

// Test d'accès aux fichiers statiques
$staticFiles = [
    '/assets/css/style.css',
    '/assets/js/main.js'
];

foreach ($staticFiles as $file) {
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $file;
    $headers = get_headers($url);
    
    echo "Test d'accès à $url\n";
    if ($headers && strpos($headers[0], '200') !== false) {
        echo "✓ Accès OK (200)\n";
    } else {
        echo "✗ Échec d'accès: " . ($headers ? $headers[0] : "Impossible d'obtenir les en-têtes") . "\n";
    }
    echo "\n";
}

echo "=== FIN DE LA VÉRIFICATION ===\n";
echo "Généré le " . date('Y-m-d H:i:s') . "\n";

// Polyfills pour PHP < 8.0
if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        if ($needle === '') return true;
        if ($haystack === '') return false;
        return substr($haystack, -strlen($needle)) === $needle;
    }
}

// Redirection vers le dossier public
include_once __DIR__ . '/public/index.php';
?> 