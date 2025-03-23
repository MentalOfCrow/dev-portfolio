# Portfolio Hugo Bisserier

![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4.svg?logo=php)
![License](https://img.shields.io/badge/license-MIT-green.svg)

Site portfolio professionnel présentant mes projets, compétences et expériences dans le développement web et la cybersécurité.

## 🚀 Fonctionnalités

- 🌓 Mode clair/sombre adapté aux préférences utilisateur
- 🌍 Support multilingue (Français/Anglais)
- 📱 Design responsive pour tous les appareils
- 🎨 Interface utilisateur moderne et élégante
- 📁 Présentation détaillée des projets avec galerie d'images
- 💼 Affichage des compétences et expériences professionnelles
- 📧 Formulaire de contact sécurisé
- 📄 Téléchargement de CV au format PDF
- ⚡ Performance optimisée pour un chargement rapide

## 🛠️ Technologies utilisées

- **Backend**:
  - PHP 8.0+ (structure MVC simplifiée)
  - MySQL (base de données minimale)
  - Architecture orientée objet
  - Sécurité renforcée (protection CSRF, XSS, etc.)

- **Frontend**:
  - HTML5 / CSS3
  - JavaScript (ES6+)
  - Responsive design (mobile-first)
  - Animations fluides avec AOS
  - Système de thèmes personnalisables

- **Outils**:
  - FontAwesome pour les icônes
  - Google Fonts pour la typographie
  - Vite.js pour le bundling des assets
  - ESLint et Prettier pour la qualité du code

## 📷 Aperçu du projet

Ce portfolio a été créé pour mettre en avant mon parcours dans le développement web et la cybersécurité. Il inclut :

- **À propos de moi** : Une brève introduction à mon parcours, mes intérêts et mes objectifs professionnels.
- **Projets** : Un aperçu détaillé de mes projets avec les technologies utilisées et les défis rencontrés.
- **Compétences** : Un résumé des compétences techniques classées par catégories (front-end, back-end, infrastructure).
- **Blog** : Des articles documentant mon processus d'apprentissage et mes découvertes techniques.
- **Contact** : Un formulaire pour me contacter directement et mes coordonnées professionnelles.

## 📂 Structure détaillée du projet

```
portfolio/
├── .git/                   # Dossier Git (non détaillé)
├── .vscode/                # Configuration VS Code
│   └── settings.json       # Paramètres VS Code (port LiveServer: 5503)
├── backend/                # Backend PHP
│   ├── controllers/        # Contrôleurs MVC (vide, préparé pour évolution)
│   ├── database/           # Structure SQL et documentation
│   │   ├── Astuces.md      # Guide de configuration de la BDD
│   │   ├── Db.md           # Documentation de la BDD (duplicate)
│   │   └── portfolio.sql   # Script SQL de création de BDD
│   ├── includes/           # Fichiers d'inclusion PHP
│   │   ├── config.php      # Configuration globale
│   │   ├── database.php    # Classe de connexion à la BDD
│   │   ├── functions.php   # Fonctions utilitaires
│   │   └── router.php      # Système de routage
│   ├── models/             # Modèles de données (vide, préparé pour évolution)
│   └── init.php            # Fichier d'initialisation
├── frontend/               # Sources frontend (pré-build, structure implicite)
├── node_modules/           # Dépendances JavaScript (non détaillé)
├── public/                 # Fichiers publics accessibles
│   ├── api/                # Points d'entrée API (vide, préparé pour évolution)
│   ├── assets/             # Ressources statiques
│   │   ├── css/            # Feuilles de style CSS
│   │   │   ├── legal-pages.css  # Styles pour pages légales
│   │   │   └── style.css        # Style principal
│   │   ├── cv/             # Fichiers PDF de CV
│   │   │   └── cv.pdf      # CV téléchargeable
│   │   ├── images/         # Images du site
│   │   │   ├── projects/   # Images des projets
│   │   │   │   ├── 1.jpg   # Image projet 1
│   │   │   │   ├── 2.jpg   # Image projet 2
│   │   │   │   └── ...     # Autres images de projets
│   │   │   └── profile.jpg # Photo de profil
│   │   └── js/             # Scripts JavaScript
│   │       └── main.js     # Script principal
│   ├── uploads/            # Dossier pour uploads utilisateur
│   │   ├── cv/             # Uploads de CV (vide)
│   │   └── projects/       # Uploads de projets (vide)
│   ├── uploadspublic/      # Copies publiques des uploads
│   │   └── assets/         # Assets publics
│   ├── views/              # Templates du site
│   │   ├── admin/          # Pages admin (vide, préparé pour évolution)
│   │   ├── auth/           # Pages d'authentification (vide)
│   │   ├── layouts/        # Layouts de page
│   │   │   └── main.php    # Layout principal
│   │   ├── pages/          # Pages du site
│   │   │   ├── 404.php     # Page d'erreur 404
│   │   │   ├── about.php   # Page À propos
│   │   │   ├── contact.php # Page Contact
│   │   │   ├── cv.php      # Page CV
│   │   │   ├── home.php    # Page d'accueil
│   │   │   ├── mentions-legales.php      # Mentions légales
│   │   │   ├── politique-confidentialite.php  # Politique de confidentialité
│   │   │   ├── projects.php # Page Projets
│   │   │   └── skills.php   # Page Compétences
│   │   └── partials/       # Éléments partiels réutilisables
│   │       ├── footer.php  # Pied de page
│   │       ├── head.php    # En-tête HTML
│   │       └── header.php  # En-tête de page
│   ├── .htaccess           # Configuration Apache
│   └── index.php           # Point d'entrée principal
├── vendor/                 # Dépendances PHP (non détaillé)
├── .env                    # Variables d'environnement (production)
├── .env.example            # Exemple de variables d'environnement
├── .eslintrc.json          # Configuration ESLint
├── .gitattributes          # Configuration Git (attributs)
├── .gitignore              # Fichiers ignorés par Git
├── .prettierrc             # Configuration Prettier
├── composer.json           # Configuration Composer
├── composer.lock           # Verrouillage des versions Composer
├── index.html              # Page d'accueil statique (fallback)
├── instruction.txt         # Instructions de développement
├── LICENSE                 # Licence MIT
├── package.json            # Configuration npm
├── package-lock.json       # Verrouillage des versions npm
├── README.md               # Documentation principale (ce fichier)
├── README_HOSTINGER.md     # Instructions spécifiques pour Hostinger
└── vite.config.js          # Configuration de Vite.js
```

## 🔧 Installation locale

1. **Prérequis**:
   - PHP 8.0 ou supérieur
   - MySQL 5.7 ou supérieur
   - Composer
   - Node.js 16+ et npm

2. **Installation**:
   ```bash
   # Cloner le dépôt
   git clone https://github.com/MentalOfCrow/portfolio.git
   cd portfolio

   # Installer les dépendances PHP
   composer install

   # Installer les dépendances JavaScript
   npm install

   # Compiler les assets
   npm run build
   ```

3. **Configuration de la base de données**:
   - Créez une base de données MySQL nommée `portfolio`
   - Importez le fichier `backend/database/portfolio.sql`
   - Copiez `.env.example` en `.env` et configurez vos identifiants

4. **Démarrage du serveur**:
   ```bash
   # Serveur PHP
   php -S localhost:8000 -t public

   # Ou pour le développement frontend (hot reload)
   npm run dev
   ```

5. **Accès**:
   - Frontend: http://localhost:8000
   - Panel admin: http://localhost:8000/admin (identifiants: admin/admin123)

## 🔍 Description des fichiers clés

### Configuration principale
- `.env` - Variables d'environnement pour l'exécution locale
- `backend/includes/config.php` - Configuration globale et détection automatique d'environnement
- `.htaccess` - Configuration Apache pour les redirections et la sécurité

### Points d'entrée
- `public/index.php` - Point d'entrée principal du site
- `backend/init.php` - Initialisation du backend (définition des constantes)

### Logique métier
- `backend/includes/functions.php` - Fonctions utilitaires PHP
- `backend/includes/database.php` - Classe de connexion et interaction avec la BDD
- `backend/includes/router.php` - Système de routage simplifié 

### Frontend
- `public/assets/css/style.css` - Style principal du site
- `public/assets/js/main.js` - Fonctionnalités JavaScript (mode sombre, multilingue)
- `public/views/layouts/main.php` - Layout principal pour toutes les pages

## 🚀 Déploiement sur Hostinger

### Configuration de la base de données

1. Créez une nouvelle base de données dans votre panel Hostinger
2. Notez le nom de la base, l'utilisateur et le mot de passe
3. Importez le fichier `backend/database/portfolio.sql` via phpMyAdmin de Hostinger

### Mise à jour de la configuration

Le fichier `backend/includes/config.php` est configuré pour détecter automatiquement l'environnement Hostinger ou le domaine hugobisserier.com.

### Upload des fichiers

1. Téléchargez tous les fichiers sur votre hébergement via FTP ou le gestionnaire de fichiers de Hostinger
2. Assurez-vous que le document root pointe vers le dossier `public/`
3. Vérifiez les permissions des dossiers (744 pour les fichiers, 755 pour les dossiers)

## 📝 Remarques importantes

- Ce portfolio fonctionne actuellement sans utiliser activement la base de données
- Toutes les données (projets, compétences) sont codées en dur dans les fichiers PHP
- La structure de base de données est incluse pour répondre aux exigences d'hébergement et pour des fonctionnalités futures
- Les dossiers `controllers/` et `models/` sont vides mais préparés pour une évolution future
- Le fichier `Db.md` est un duplicate d'`Astuces.md` et peut être supprimé

## 📞 Support et contact

Si vous avez des questions ou souhaitez entrer en contact, n'hésitez pas à m'écrire:

- Email principal: [hugo.bisserier.pro@gmail.com](mailto:hugo.bisserier.pro@gmail.com)
- Email secondaire: [hugo.bisserier@ynov.com](mailto:hugo.bisserier@ynov.com)
- GitHub: [github.com/MentalOfCrow](https://github.com/MentalOfCrow)
- LinkedIn: [linkedin.com/in/hugo-bisserier-a67327324](https://www.linkedin.com/in/hugo-bisserier-a67327324/)

## 📄 Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

Merci d'avoir pris le temps de consulter mon portfolio ! 🙌
