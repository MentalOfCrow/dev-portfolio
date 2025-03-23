<?php
/**
 * Script de déploiement automatique pour Hostinger
 * À placer dans le dossier public_html de votre hébergement
 */

// Configuration de base
$repo_dir = __DIR__; // Répertoire du dépôt (public_html)
$branch = 'main';    // Branche à déployer
$secret_token = 'hugo_bisserier_secret_token'; // À changer pour votre propre token
$log_file = __DIR__ . '/deploy-log.txt'; // Fichier de log

// Fonction pour journaliser
function write_log($message) {
    global $log_file;
    $date = date('Y-m-d H:i:s');
    file_put_contents($log_file, "[$date] $message" . PHP_EOL, FILE_APPEND);
}

// Vérification des requêtes POST uniquement
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Méthode non autorisée";
    exit;
}

// Vérification du token dans les paramètres
$token = $_GET['token'] ?? '';
if ($token !== $secret_token) {
    http_response_code(401);
    write_log("Tentative d'accès non autorisée - Token invalide");
    echo "Non autorisé";
    exit;
}

// Vérification des commandes git
$git_bin = trim(shell_exec('which git'));
if (empty($git_bin)) {
    http_response_code(500);
    write_log("Erreur: Git n'est pas disponible sur le serveur");
    echo "Erreur: Git n'est pas disponible";
    exit;
}

// Démarrage du déploiement
$time_start = microtime(true);
write_log("Démarrage du déploiement");

// Récupérer les modifications
try {
    // Assurer que nous sommes dans le bon répertoire
    chdir($repo_dir);
    
    // Exécuter les commandes git
    $output = [];
    
    // Désactiver la vérification SSL pour les serveurs qui ont des problèmes de certificat
    exec('git config --global http.sslVerify false', $output, $return_var);
    
    // Récupérer les derniers changements sans modifier les fichiers locaux
    exec("git fetch origin $branch 2>&1", $output, $return_var);
    
    // Vérifier s'il y a des modifications à déployer
    exec("git rev-list HEAD...origin/$branch --count", $changes, $return_var);
    $changes_count = intval($changes[0]);
    
    if ($changes_count > 0) {
        // Il y a des changements à déployer
        write_log("$changes_count changements détectés, application des modifications...");
        
        // Réinitialiser les modifications locales si nécessaire
        exec('git reset --hard HEAD 2>&1', $output, $return_var);
        
        // Tirer les changements
        exec("git pull origin $branch 2>&1", $output, $return_var);
        
        if ($return_var !== 0) {
            // Erreur lors du pull
            http_response_code(500);
            write_log("Erreur lors du pull: " . implode("\n", $output));
            echo "Erreur lors du déploiement. Voir les logs pour plus de détails.";
            exit;
        }
        
        // Vérifier si des fichiers composer sont présents et exécuter composer install
        if (file_exists($repo_dir . '/composer.json')) {
            write_log("Composer.json détecté, installation des dépendances");
            exec('composer install --no-dev --optimize-autoloader 2>&1', $output, $return_var);
        }
        
        // Noter le succès
        $time_end = microtime(true);
        $time = round($time_end - $time_start, 2);
        write_log("Déploiement réussi en $time secondes");
        
        echo "Déploiement réussi! $changes_count fichiers modifiés.";
    } else {
        // Aucun changement détecté
        write_log("Aucun changement détecté, le site est à jour");
        echo "Le site est déjà à jour.";
    }
} catch (Exception $e) {
    http_response_code(500);
    write_log("Exception: " . $e->getMessage());
    echo "Une erreur est survenue: " . $e->getMessage();
}
?> 