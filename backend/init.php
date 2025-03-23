<?php

// Ce fichier doit être inclus avant tout accès aux fichiers de configuration
define('ACCESS_GRANTED', true);

// Définir une constante pour autoriser l'accès aux pages
if (!defined('ACCESS')) {
    define('ACCESS', true);
} 