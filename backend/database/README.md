# Configuration de la Base de Données

Ce dossier contient la structure SQL pour la base de données du portfolio. Bien que le site fonctionne actuellement sans base de données active (toutes les données sont hardcodées dans les fichiers PHP), cette structure est fournie pour faciliter les migrations et les hébergements qui exigent une base de données.

## Migration vers Hostinger

Pour migrer ce site vers Hostinger, suivez ces étapes:

1. Créez une nouvelle base de données depuis votre panneau Hostinger:
   - Allez dans "Bases de données MySQL"
   - Cliquez sur "Nouvelle base de données"
   - Choisissez un nom (par exemple "u123456_portfolio")
   - Créez un utilisateur avec des privilèges complets

2. Importez le fichier SQL:
   - Cliquez sur votre nouvelle base de données
   - Allez dans l'onglet "Import"
   - Téléchargez le fichier `portfolio.sql`

3. Mettez à jour le fichier de configuration:
   - Ouvrez `backend/includes/config.php`
   - Remplacez les valeurs de DB_HOST, DB_NAME, DB_USER et DB_PASS avec les informations fournies par Hostinger

## Notes importantes

- Le site est conçu pour fonctionner sans utiliser activement la base de données
- Les tables sont créées à titre préventif pour des fonctionnalités futures
- Les projets, compétences et autres informations sont actuellement gérés directement dans les fichiers PHP

## Structure de la base de données

La base de données comprend les tables suivantes:

- `users`: Pour l'authentification (admin)
- `projects`: Pour stocker les détails des projets
- `project_images`: Pour les images associées aux projets
- `skills`: Pour les compétences techniques
- `messages`: Pour les messages envoyés via le formulaire de contact 

```php
// Configuration BD pour Hostinger
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio'); // ou le nom que vous avez choisi
define('DB_USER', 'portfolio_user'); // remplacez par votre utilisateur Hostinger
define('DB_PASS', 'portfolio_password'); // remplacez par votre mot de passe Hostinger
```