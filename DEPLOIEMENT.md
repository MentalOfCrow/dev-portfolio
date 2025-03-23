# 📄 Déploiement du Portfolio sur Hostinger

Ce guide détaille le processus de déploiement du portfolio sur l'hébergement Hostinger en utilisant Git pour automatiser le processus.

## Préparation locale

### 1. Modification de la configuration Vite

Le fichier `vite.config.js` a été ajusté pour:
- Utiliser les bons chemins d'entrée (`public/assets/js/main.js`)
- Gérer les assets correctement pour la production
- Éviter l'erreur liée au fichier `admin.js` manquant
- Configurer le chemin de base pour un déploiement sur Hostinger (`base: './'`)

### 2. Build de l'application

```bash
# Installer les dépendances
npm install

# Construire l'application
npm run build
```

Cette commande génère un dossier `dist/` contenant les fichiers optimisés.

### 3. Inclusion du dossier dist dans le dépôt Git

Le fichier `.gitignore` a été modifié pour permettre l'inclusion du dossier `dist/`.

```bash
# Ajouter le dossier dist au dépôt
git add dist
git commit -m "Ajout du dossier build pour le déploiement"
git push
```

## Configuration sur Hostinger

### 1. Panel d'administration Hostinger

1. Se connecter au panel d'administration Hostinger
2. Accéder à la section **Git** ou **Déploiement**
3. Configurer un nouveau dépôt:
   - URL du dépôt: `git@github.com:MentalOfCrow/dev-portfolio.git`
   - Branche: `main`
   - Répertoire de déploiement: `/` (racine) ou `/public_html`

### 2. Dossier de déploiement

Pour que le site fonctionne correctement, il faut que les fichiers soient organisés ainsi:

```
public_html/           # Racine du site sur Hostinger
├── public/            # Le contenu de ton dossier public (pas dist!)
│   ├── index.php      # Point d'entrée principal
│   ├── .htaccess      # Configuration Apache
│   ├── assets/        # Ressources CSS, JS, images
│   ├── views/         # Templates PHP
│   └── ...            # Autres fichiers publics
├── backend/           # Dossier backend (hors de la racine web)
│   ├── includes/      # Configuration et fonctions PHP
│   ├── database/      # Scripts SQL et documentation
│   └── ...            # Autres fichiers backend
└── ...                # Autres fichiers à la racine
```

### 3. Configuration du document root

**Important**: Le document root doit pointer vers le dossier `/public_html/public`.

Dans le panel Hostinger:
1. Aller dans la section **Hébergement** → **Paramètres**
2. Chercher le paramètre **Document Root**
3. Le configurer sur `/public_html/public`

## Problème courant: Erreur 404

Si vous rencontrez des erreurs 404, vérifiez:

1. Que le fichier `.htaccess` est bien présent dans le dossier `public/`
2. Que le document root est correctement configuré
3. Que les chemins dans `public/index.php` sont corrects

## Structure finale sur Hostinger

```
public_html/                 # Racine de l'hébergement
├── public/                  # Document root (accessible via le web)
│   ├── index.php            # Point d'entrée principal
│   ├── .htaccess            # Configuration Apache (important!)
│   ├── assets/              # Ressources statiques
│   │   ├── css/             # Styles CSS
│   │   ├── js/              # Scripts JavaScript
│   │   └── images/          # Images
│   ├── uploads/             # Dossier uploads utilisateur
│   └── views/               # Templates PHP
└── backend/                 # Backend (inaccessible via le web directement)
    ├── database/
    ├── includes/
    ├── models/
    └── controllers/
```

## Protection supplémentaire

Ajoutez ces règles à votre fichier `.htaccess` pour renforcer la sécurité:

```apache
# Bloquer l'accès direct aux fichiers sensibles
<FilesMatch "\.(env|md|sql|json|lock|gitignore|htaccess)$">
    Order allow,deny
    Deny from all
</FilesMatch>

# Bloquer l'accès au dossier backend
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^backend(/.*)?$ - [F,L]
</IfModule>
```

## Nettoyage après déploiement

Une fois le site fonctionnel:

```bash
# Supprimer dist du dépôt
git rm -r --cached dist
git commit -m "Retrait du dossier dist après déploiement"
git push

# Restaurer la ligne dans .gitignore
# Remplacer "# /dist" par "/dist"
```

## Vérification post-déploiement

Après le déploiement, vérifiez:

1. Que le site est accessible à l'URL principale
2. Que les liens internes fonctionnent
3. Que les styles et scripts sont correctement chargés
4. Que les formulaires fonctionnent bien
5. Que la base de données est correctement configurée (si utilisée)

## Astuces supplémentaires

- Désactivez temporairement la minification si vous rencontrez des problèmes (dans vite.config.js)
- Utilisez les outils de développement du navigateur pour analyser les erreurs de console
- Vérifiez les logs d'erreur PHP dans le panel Hostinger

---

**Note importante**: Comme votre portfolio utilise déjà une structure avec un dossier `public/` comme point d'entrée, il n'est pas nécessaire de reconfigurer l'ensemble de la structure. Le document root doit simplement pointer vers ce dossier. 