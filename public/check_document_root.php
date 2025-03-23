<?php
/**
 * Fichier de compatibilité pour fonctions PHP 8.0+
 */

// Définition des constantes essentielles
define('ACCESS_GRANTED', true);
define('ACCESS', true);

// Polyfill pour PHP < 8.0
if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) return true;
        return substr($haystack, -$length) === $needle;
    }
}

// Entête pour forcer l'affichage en texte brut
header('Content-Type: text/plain');

echo "=== VÉRIFICATION DU DOCUMENT ROOT ===\n\n";

echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Chemin absolu du script: " . __FILE__ . "\n";
echo "Chemin relatif: " . $_SERVER['PHP_SELF'] . "\n\n";

// Vérifier si public est bien le document root
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Version compatible avec PHP 7.x
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
$backendPath = dirname(__DIR__) . '/backend';
if (is_dir($backendPath)) {
    echo "✓ Le dossier backend est accessible\n";
} else {
    echo "✗ Le dossier backend n'est PAS accessible\n";
    echo "  → Vérifiez que la structure de dossiers est correcte\n";
}

// Afficher la version PHP
echo "\nVersion PHP: " . phpversion() . "\n";
echo "Date du test: " . date('Y-m-d H:i:s') . "\n";

// Redirection vers le dossier public
include_once __DIR__ . '/public/index.php';
?> 