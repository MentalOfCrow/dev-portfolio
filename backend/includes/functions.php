<?php
// Empêcher l'accès direct au fichier
defined('ACCESS_GRANTED') or die('Accès interdit');

// Définition des constantes si elles ne sont pas déjà définies
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', realpath(__DIR__ . '/../../'));
}

if (!defined('MAX_UPLOAD_SIZE')) {
    define('MAX_UPLOAD_SIZE', 5 * 1024 * 1024); // 5MB par défaut
}

if (!defined('ALLOWED_FILE_TYPES')) {
    define('ALLOWED_FILE_TYPES', [
        'image/jpeg',
        'image/png',
        'image/gif',
        'application/pdf'
    ]);
}

/**
 * Génère un token CSRF
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Vérifie si le token CSRF est valide
 */
function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Nettoie une chaîne de caractères
 */
function sanitize($input) {
    return htmlspecialchars(strip_tags(trim($input)), ENT_QUOTES, 'UTF-8');
}

/**
 * Redirige vers une URL
 */
function redirect($url) {
    header("Location: " . $url);
    exit();
}

/**
 * Vérifie si l'utilisateur est connecté
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Vérifie si l'utilisateur est admin
 */
function isAdmin() {
    return isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
}

/**
 * Retourne la langue actuelle
 */
function getCurrentLanguage() {
    return isset($_SESSION['language']) ? $_SESSION['language'] : 'fr';
}

/**
 * Retourne le thème actuel
 */
function getCurrentTheme() {
    return isset($_SESSION['theme']) ? $_SESSION['theme'] : 'light';
}

/**
 * Génère une URL sécurisée
 */
function secureUrl($path) {
    return rtrim(APP_URL, '/') . '/' . ltrim($path, '/');
}

/**
 * Formate une date
 */
function formatDate($date, $format = 'd/m/Y H:i') {
    return date($format, strtotime($date));
}

/**
 * Génère un slug à partir d'une chaîne
 */
function generateSlug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', '-', $string);
    $string = trim($string, '-');
    return $string;
}

/**
 * Upload un fichier
 */
function uploadFile($file, $destination, $allowedTypes = null, $maxSize = null) {
    $allowedTypes = $allowedTypes ?? ALLOWED_FILE_TYPES;
    $maxSize = $maxSize ?? MAX_UPLOAD_SIZE;
    
    try {
        // Vérifications de base
        if (!isset($file['error']) || is_array($file['error'])) {
            throw new Exception('Paramètres invalides');
        }

        // Vérification des erreurs d'upload
        switch ($file['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new Exception('Le fichier est trop volumineux');
            case UPLOAD_ERR_PARTIAL:
                throw new Exception('Le fichier n\'a été que partiellement uploadé');
            case UPLOAD_ERR_NO_FILE:
                throw new Exception('Aucun fichier n\'a été uploadé');
            default:
                throw new Exception('Erreur inconnue');
        }

        // Vérification de la taille
        if ($file['size'] > $maxSize) {
            throw new Exception('Le fichier est trop volumineux');
        }

        // Vérification du type MIME
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $fileType = $finfo->file($file['tmp_name']);
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        
        if (!in_array($ext, $allowedTypes)) {
            throw new Exception('Type de fichier non autorisé');
        }

        // Génération d'un nom unique
        $fileName = uniqid() . '.' . $ext;
        $targetPath = $destination . '/' . $fileName;

        // Déplacement du fichier
        if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
            throw new Exception('Échec du déplacement du fichier');
        }

        return $fileName;
    } catch (Exception $e) {
        error_log("Erreur d'upload : " . $e->getMessage());
        throw $e;
    }
}

/**
 * Supprime un fichier
 */
function deleteFile($path) {
    if (file_exists($path)) {
        return unlink($path);
    }
    return false;
}

/**
 * Envoie une réponse JSON
 */
function jsonResponse($data, $statusCode = 200) {
    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit();
}

/**
 * Log une action
 */
function logAction($action, $details = '') {
    $userId = $_SESSION['user_id'] ?? 0;
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s');
    
    $log = "[{$timestamp}] User ID: {$userId} - IP: {$ip} - Action: {$action} - Details: {$details}\n";
    error_log($log, 3, ROOT_PATH . '/logs/activity.log');
}

/**
 * Vérifie si une requête est en AJAX
 */
function isAjaxRequest() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * Charge une vue
 */
function loadView($view, $data = []) {
    extract($data);
    $viewPath = PUBLIC_PATH . '/views/' . $view . '.php';
    
    if (!file_exists($viewPath)) {
        throw new Exception("Vue non trouvée : {$view}");
    }
    
    ob_start();
    require $viewPath;
    return ob_get_clean();
}

/**
 * Traduit une chaîne
 */
function translate($key, $placeholders = []) {
    $lang = getCurrentLanguage();
    $translations = require ROOT_PATH . "/public/assets/js/translations.php";
    
    $text = $translations[$lang][$key] ?? $key;
    
    foreach ($placeholders as $placeholder => $value) {
        $text = str_replace("{{" . $placeholder . "}}", $value, $text);
    }
    
    return $text;
}

/**
 * Affiche un message d'erreur
 * @param string $message
 * @return string
 */
function displayError($message) {
    return "<div class='alert alert-danger'>" . htmlspecialchars($message) . "</div>";
}

/**
 * Affiche un message de succès
 * @param string $message
 * @return string
 */
function displaySuccess($message) {
    return "<div class='alert alert-success'>" . htmlspecialchars($message) . "</div>";
}

/**
 * Vérifie si une requête est de type POST
 * @return bool
 */
function isPost() {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}

/**
 * Vérifie si une requête est de type GET
 * @return bool
 */
function isGet() {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
}

/**
 * Vérifie si une requête est de type AJAX
 * @return bool
 */
function isAjax() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}

/**
 * Vérifie si un fichier est une image valide
 * @param array $file
 * @return bool
 */
function isValidImage($file) {
    $allowed = ['image/jpeg', 'image/png', 'image/gif'];
    return isset($file['type']) && in_array($file['type'], $allowed);
}

/**
 * Génère un nom de fichier unique
 * @param string $originalName
 * @return string
 */
function generateUniqueFileName($originalName) {
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    return uniqid() . '_' . time() . '.' . $extension;
}

/**
 * Vérifie si un email est valide
 * @param string $email
 * @return bool
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Tronque un texte à une longueur donnée
 * @param string $text
 * @param int $length
 * @param string $suffix
 * @return string
 */
function truncateText($text, $length = 100, $suffix = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    return substr($text, 0, $length) . $suffix;
}

/**
 * Vérifie si une chaîne contient un mot donné
 * @param string $haystack
 * @param string $needle
 * @return bool
 */
function containsWord($haystack, $needle) {
    return stripos($haystack, $needle) !== false;
}

/**
 * Retourne l'URL de base du site
 * @return string
 */
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    return $protocol . '://' . $_SERVER['HTTP_HOST'];
}

/**
 * Retourne l'URL actuelle
 * @return string
 */
function getCurrentUrl() {
    return getBaseUrl() . $_SERVER['REQUEST_URI'];
}

/**
 * Vérifie si l'URL actuelle correspond à un pattern
 * @param string $pattern
 * @return bool
 */
function isCurrentUrl($pattern) {
    return preg_match($pattern, $_SERVER['REQUEST_URI']) === 1;
} 