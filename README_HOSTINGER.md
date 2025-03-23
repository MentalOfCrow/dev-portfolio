# Portfolio Hugo Bisserier - Instructions pour Hostinger

Ce document explique comment configurer ce portfolio sur un hébergement Hostinger.

## Structure du projet

Ce portfolio est un site web PHP structuré comme suit:

- `public/`: Contient tous les fichiers accessibles au public (point d'entrée, assets, etc.)
- `backend/`: Contient la logique et la configuration du site
  - `includes/`: Fichiers de configuration et fonctions utilitaires
  - `database/`: Structure SQL pour la base de données
  - `app/`: Logique métier (contrôleurs, modèles)

## Particularités importantes

**Ce site est principalement statique:**
- Les données (projets, compétences) sont directement intégrées dans les fichiers PHP
- Le site ne dépend pas activement d'une base de données pour fonctionner
- La base de données est incluse uniquement pour répondre aux exigences d'hébergement

## Configuration sur Hostinger

### 1. Configuration de la base de données

Créez une base de données vide:
1. Allez dans "Bases de données MySQL" dans votre panel Hostinger
2. Créez une nouvelle base de données 
3. Notez les informations (nom, utilisateur, mot de passe)
4. Importez le fichier `backend/database/portfolio.sql` (optionnel mais recommandé)

### 2. Configuration du fichier config.php

Le fichier `backend/includes/config.php` est déjà configuré pour détecter automatiquement l'environnement Hostinger, mais vous devez y mettre vos informations:

```php
// Remplacez ces valeurs par celles fournies par Hostinger
define('DB_HOST', 'localhost'); // généralement localhost chez Hostinger
define('DB_NAME', 'u123456789_portfolio'); // à remplacer par votre nom de base
define('DB_USER', 'u123456789_portfolio'); // à remplacer par votre utilisateur
define('DB_PASS', 'MotDePasseSecurise123'); // à remplacer par votre mot de passe
```

### 3. Installation des dépendances

Si vous rencontrez des erreurs liées à Composer, exécutez:
```
composer install --no-dev --optimize-autoloader
```

### 4. Configuration du point d'entrée

Assurez-vous que le document root pointe vers le dossier `public/`.

## Fonctionnalités du site

- 🌓 Mode clair/sombre
- 🌍 Support multilingue (Français/Anglais)
- 📱 Design responsive
- 📄 Téléchargement de CV
- 📧 Formulaire de contact

## Support

Pour toute assistance, contactez Hugo Bisserier: hugo.bisserier.pro@gmail.com 