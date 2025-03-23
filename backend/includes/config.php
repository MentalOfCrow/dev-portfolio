<?php
// Empêcher l'accès direct au fichier
defined('ACCESS_GRANTED') or die('Accès interdit');

// Configuration de base
define('APP_NAME', 'Portfolio Hugo Bisserier');
define('APP_ENV', 'development');
define('APP_DEBUG', true);

// Détection automatique de l'environnement (local vs production)
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
if (strpos($host, 'hostinger') !== false || strpos($host, 'hugobisserier.com') !== false) {
    // Environnement de production (Hostinger)
    define('APP_URL', 'https://'.$host);
    // Configuration BD pour Hostinger
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'portfolio');
    define('DB_USER', 'portfolio_user'); // à remplacer par l'utilisateur fourni par Hostinger
    define('DB_PASS', 'portfolio_password'); // à remplacer par le mot de passe fourni par Hostinger
} else {
    // Environnement local
    define('APP_URL', 'http://localhost:8000');
    // Configuration BD pour environnement local
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'portfolio');
    define('DB_USER', 'root');
    define('DB_PASS', '');
}

// Configuration des chemins
define('ROOT_PATH', realpath(__DIR__ . '/../../'));
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('UPLOAD_PATH', PUBLIC_PATH . '/uploads');
define('CV_PATH', UPLOAD_PATH . '/cv');
define('PROJECTS_PATH', UPLOAD_PATH . '/projects');
define('MAX_UPLOAD_SIZE', 5 * 1024 * 1024); // 5MB

// Configuration des emails
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
define('MAIL_USERNAME', 'hugo.bisserier.pro@gmail.com');
define('MAIL_PASSWORD', 'your-password');
define('MAIL_ENCRYPTION', 'tls');
define('MAIL_FROM_ADDRESS', 'hugo.bisserier.pro@gmail.com');
define('MAIL_FROM_NAME', APP_NAME);

// Configuration des langues
define('DEFAULT_LANGUAGE', 'fr');
define('AVAILABLE_LANGUAGES', ['fr', 'en']);

// Configuration du thème
define('DEFAULT_THEME', 'light');
define('AVAILABLE_THEMES', ['light', 'dark']);

// Configuration de la sécurité
define('SESSION_LIFETIME', 7200);
define('PASSWORD_MIN_LENGTH', 8);
define('MAX_LOGIN_ATTEMPTS', 5);
define('LOGIN_TIMEOUT', 900);

// Types de fichiers autorisés
define('ALLOWED_FILE_TYPES', [
    'image/jpeg',
    'image/png',
    'image/gif',
    'application/pdf'
]);

// Configuration de la pagination
define('PROJECTS_PER_PAGE', 6);
define('MAX_PROJECT_IMAGES', 5);
define('POSTS_PER_PAGE', 10);
define('EXCERPT_LENGTH', 200);
define('MESSAGES_PER_PAGE', 20);

// Configuration des erreurs PHP
error_reporting(E_ALL);
ini_set('display_errors', APP_DEBUG ? '1' : '0');
ini_set('log_errors', '1');
ini_set('error_log', ROOT_PATH . '/logs/php-error.log');

// Configuration de la timezone
date_default_timezone_set('Europe/Paris');

// Configuration de l'encodage
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

// Création des dossiers nécessaires
$directories = [UPLOAD_PATH, CV_PATH, PROJECTS_PATH];
foreach ($directories as $directory) {
    if (!file_exists($directory)) {
        mkdir($directory, 0755, true);
    }
} 