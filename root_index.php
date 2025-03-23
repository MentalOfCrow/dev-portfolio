<?php
/**
 * Point d'entrée principal - Portfolio Hugo Bisserier
 * Ce fichier redirige vers le dossier /public et assure la compatibilité PHP 7.x
 */

// Définition des constantes d'accès requises
define('ACCESS_GRANTED', true);
define('ACCESS', true);

// Polyfill pour PHP 7.x (fonction str_ends_with disponible seulement en PHP 8.0+)
if (!function_exists('str_ends_with')) {
    function str_ends_with($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) return true;
        return substr($haystack, -$length) === $needle;
    }
}

// Définition des chemins
$publicPath = __DIR__ . '/public';
$publicIndexPath = $publicPath . '/index.php';

// Vérification de l'existence du dossier public et du fichier index.php
if (!is_dir($publicPath)) {
    die("Erreur critique : Le dossier 'public' est manquant. Veuillez vérifier votre installation.");
}

if (!file_exists($publicIndexPath)) {
    die("Erreur critique : Le fichier 'public/index.php' est manquant. Veuillez vérifier votre installation.");
}

// Redirection vers le dossier public
include_once $publicIndexPath; 