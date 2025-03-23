<?php
// Définition des constantes essentielles
define('ACCESS_GRANTED', true);
define('ACCESS', true);

// Forcer l'affichage en texte brut
header('Content-Type: text/plain');

echo "===============================================\n";
echo "= DIAGNOSTIC COMPLET DU PORTFOLIO SUR HOSTINGER =\n";
echo "===============================================\n\n";

// Informations système de base
echo "== INFORMATIONS SYSTÈME ==\n";
echo "Date et heure du test : " . date('Y-m-d H:i:s') . "\n";
echo "Version PHP : " . phpversion() . "\n";
echo "Document Root : " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Hostname : " . $_SERVER['HTTP_HOST'] . "\n";
echo "Chemin absolu du script : " . __FILE__ . "\n\n";

// Vérification des fichiers critiques à la racine
echo "== FICHIERS RACINE ==\n";
$rootFiles = [
    '.htaccess',
    'index.php',
    'verification_site.php'
];

foreach ($rootFiles as $file) {
    if (file_exists(__DIR__ . '/' . $file)) {
        echo "✓ $file : PRÉSENT\n";
    } else {
        echo "✗ $file : MANQUANT\n";
    }
}
echo "\n";

// Vérification du dossier public
echo "== STRUCTURE /public ==\n";
$publicPath = __DIR__ . '/public';
if (is_dir($publicPath)) {
    echo "✓ Dossier /public : PRÉSENT\n";
    
    // Vérification des fichiers critiques dans public
    $publicFiles = [
        'index.php',
        '.htaccess',
        'check_document_root.php'
    ];
    
    foreach ($publicFiles as $file) {
        if (file_exists($publicPath . '/' . $file)) {
            echo "  ✓ public/$file : PRÉSENT\n";
        } else {
            echo "  ✗ public/$file : MANQUANT\n";
        }
    }
    
    // Vérification des sous-dossiers dans public
    $publicSubdirs = [
        'views',
        'assets',
        'uploads'
    ];
    
    foreach ($publicSubdirs as $dir) {
        if (is_dir($publicPath . '/' . $dir)) {
            echo "  ✓ public/$dir/ : PRÉSENT\n";
        } else {
            echo "  ✗ public/$dir/ : MANQUANT\n";
        }
    }
} else {
    echo "✗ Dossier /public : MANQUANT (CRITIQUE)\n";
}
echo "\n";

// Vérification du dossier backend
echo "== STRUCTURE /backend ==\n";
$backendPath = __DIR__ . '/backend';
if (is_dir($backendPath)) {
    echo "✓ Dossier /backend : PRÉSENT\n";
    
    // Vérification des fichiers critiques dans backend
    if (file_exists($backendPath . '/init.php')) {
        echo "  ✓ backend/init.php : PRÉSENT\n";
    } else {
        echo "  ✗ backend/init.php : MANQUANT (CRITIQUE)\n";
    }
    
    // Vérification des sous-dossiers dans backend
    $backendSubdirs = [
        'includes',
        'models',
        'controllers',
        'database'
    ];
    
    foreach ($backendSubdirs as $dir) {
        if (is_dir($backendPath . '/' . $dir)) {
            echo "  ✓ backend/$dir/ : PRÉSENT\n";
        } else {
            echo "  ✗ backend/$dir/ : MANQUANT\n";
        }
    }
} else {
    echo "✗ Dossier /backend : MANQUANT (CRITIQUE)\n";
}
echo "\n";

// Test de redirection
echo "== TEST DE REDIRECTION ==\n";
echo "Note: Ce test vérifie si la redirection vers le dossier /public fonctionne.\n";
echo "URL actuelle : http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . "\n";
echo "URL racine : http://" . $_SERVER['HTTP_HOST'] . "/\n\n";

// Test de chargement de fichiers statiques
echo "== TEST DE FICHIERS STATIQUES ==\n";
$staticFiles = [
    '/public/assets/css/style.css',
    '/public/assets/js/main.js'
];

foreach ($staticFiles as $file) {
    $url = 'http://' . $_SERVER['HTTP_HOST'] . $file;
    $headers = @get_headers($url);
    
    if ($headers && strpos($headers[0], '200') !== false) {
        echo "✓ $file : ACCESSIBLE (200 OK)\n";
    } else {
        echo "✗ $file : INACCESSIBLE\n";
    }
}
echo "\n";

// Vérification de la fonction str_ends_with (PHP 7.x compatibilité)
echo "== COMPATIBILITÉ PHP 7.x ==\n";
if (!function_exists('str_ends_with')) {
    echo "- Fonction str_ends_with manquante (PHP < 8.0)\n";
    echo "✓ SOLUTION: Un polyfill a été ajouté dans index.php\n";
} else {
    echo "✓ Fonction str_ends_with disponible (PHP >= 8.0)\n";
}
echo "\n";

// Recommandations finales
echo "== RECOMMANDATIONS ==\n";
if (!is_dir($publicPath) || !is_dir($backendPath)) {
    echo "! CRITIQUE: Un ou plusieurs dossiers principaux sont manquants.\n";
    echo "  → Vérifiez que le déploiement a bien transféré TOUS les fichiers.\n";
} 

if (is_dir($publicPath) && !file_exists($publicPath . '/index.php')) {
    echo "! CRITIQUE: Le fichier public/index.php est manquant.\n";
}

if (file_exists(__DIR__ . '/.htaccess') && is_dir($publicPath)) {
    echo "✓ BIEN: Vous avez un fichier .htaccess à la racine qui peut rediriger vers /public\n";
} else {
    echo "! ATTENTION: Assurez-vous d'avoir un fichier .htaccess à la racine pour rediriger vers /public\n";
}

echo "\n== FIN DU DIAGNOSTIC ==\n";
echo "Si vous rencontrez des problèmes, vérifiez:\n";
echo "1. Que les fichiers .htaccess et index.php existent à la racine et dans /public\n";
echo "2. Que la structure de dossiers est correcte (backend et public)\n";
echo "3. Que les permissions des fichiers sont correctes (644 pour les fichiers, 755 pour les dossiers)\n"; 