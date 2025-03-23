<?php
/**
 * Fichier de test pour vérifier la configuration sur Hostinger
 */

// Entête pour l'affichage en texte brut
header('Content-Type: text/plain');

echo "=== VÉRIFICATION DU DOCUMENT ROOT ===\n\n";

echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Chemin absolu du script: " . __FILE__ . "\n";
echo "Chemin relatif: " . $_SERVER['PHP_SELF'] . "\n\n";

// Vérifier si public est bien le document root
$expectedPath = '/public_html/public';
$documentRoot = $_SERVER['DOCUMENT_ROOT'];

// Version compatible avec PHP 7.x - PAS DE str_ends_with
$publicCheck = substr($documentRoot, -7) === '/public';

if ($publicCheck) {
    echo "✓ CORRECT: Le document root se termine bien par '/public'\n";
} else {
    echo "✗ ERREUR: Le document root ne se termine pas par '/public'\n";
    echo "  → Vous devez configurer le document root pour qu'il pointe vers le dossier 'public'\n";
    echo "  → Dans Hostinger, allez dans Hébergement > Paramètres > Document Root\n";
}

// Afficher les informations système
echo "<h1>Test de configuration Hostinger</h1>";

// Vérifier les chemins
echo "<h2>Chemins du système</h2>";
echo "<ul>";
echo "<li>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</li>";
echo "<li>Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "</li>";
echo "<li>Request URI: " . $_SERVER['REQUEST_URI'] . "</li>";
echo "<li>PHP Self: " . $_SERVER['PHP_SELF'] . "</li>";
echo "</ul>";

// Vérifier l'accès au dossier parent
echo "<h2>Test d'accès au dossier parent</h2>";
$backendPath = dirname(__DIR__) . '/backend';
if (is_dir($backendPath)) {
    echo "<p style='color:green'>✓ Le dossier backend est accessible depuis PHP</p>";
    
    // Vérifier quelques fichiers importants
    $configFile = $backendPath . '/includes/config.php';
    if (file_exists($configFile)) {
        echo "<p style='color:green'>✓ Le fichier config.php existe</p>";
    } else {
        echo "<p style='color:red'>✗ Le fichier config.php est INTROUVABLE</p>";
    }
} else {
    echo "<p style='color:red'>✗ Le dossier backend est INTROUVABLE</p>";
}

// Vérifier les assets
echo "<h2>Test d'accès aux assets</h2>";
$cssPath = __DIR__ . '/assets/css/style.css';
if (file_exists($cssPath)) {
    echo "<p style='color:green'>✓ Le fichier CSS principal existe</p>";
} else {
    echo "<p style='color:red'>✗ Le fichier CSS principal est INTROUVABLE</p>";
}

$jsPath = __DIR__ . '/assets/js/main.js';
if (file_exists($jsPath)) {
    echo "<p style='color:green'>✓ Le fichier JavaScript principal existe</p>";
} else {
    echo "<p style='color:red'>✗ Le fichier JavaScript principal est INTROUVABLE</p>";
}

// Vérifier les extensions PHP
echo "<h2>Extensions PHP</h2>";
$requiredExtensions = ['pdo', 'pdo_mysql', 'mbstring', 'json', 'gd'];
echo "<ul>";
foreach ($requiredExtensions as $ext) {
    if (extension_loaded($ext)) {
        echo "<li style='color:green'>✓ $ext</li>";
    } else {
        echo "<li style='color:red'>✗ $ext - MANQUANTE</li>";
    }
}
echo "</ul>";

// Vérifier les permissions d'écriture
echo "<h2>Permissions d'écriture</h2>";
$uploadDirs = [
    'uploads/cv',
    'uploads/projects',
    'uploads/blog',
    'uploads/temp'
];

foreach ($uploadDirs as $dir) {
    $fullPath = __DIR__ . '/' . $dir;
    if (is_dir($fullPath)) {
        if (is_writable($fullPath)) {
            echo "<p style='color:green'>✓ Le dossier $dir est accessible en écriture</p>";
        } else {
            echo "<p style='color:red'>✗ Le dossier $dir n'est PAS accessible en écriture</p>";
        }
    } else {
        echo "<p style='color:orange'>⚠ Le dossier $dir n'existe pas</p>";
    }
}

// Afficher les variables d'environnement (version sécurisée)
echo "<h2>Variables d'environnement</h2>";
$envFile = dirname(__DIR__) . '/.env';
if (file_exists($envFile)) {
    echo "<p style='color:green'>✓ Le fichier .env existe</p>";
    // Ne pas afficher le contenu pour des raisons de sécurité
} else {
    echo "<p style='color:red'>✗ Le fichier .env est INTROUVABLE</p>";
}

// Afficher la configuration PHP
echo "<h2>Configuration PHP</h2>";
echo "<ul>";
echo "<li>Version PHP: " . phpversion() . "</li>";
echo "<li>Memory Limit: " . ini_get('memory_limit') . "</li>";
echo "<li>Max Execution Time: " . ini_get('max_execution_time') . " secondes</li>";
echo "<li>Upload Max Filesize: " . ini_get('upload_max_filesize') . "</li>";
echo "<li>Post Max Size: " . ini_get('post_max_size') . "</li>";
echo "</ul>";

echo "<hr>";
echo "<p>Test terminé à " . date('Y-m-d H:i:s') . "</p>";
?> 