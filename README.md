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
  - Vite.js pour le bundling et le hot reload
  - Responsive design (mobile-first)
  - Animations fluides avec AOS
  - Système de thèmes personnalisables

- **Outils**:
  - FontAwesome pour les icônes
  - Google Fonts pour la typographie
  - ESLint et Prettier pour la qualité du code
  - Composer pour la gestion des dépendances PHP
  - npm pour la gestion des dépendances JavaScript

- **Structure**:
  - Architecture MVC simplifiée
  - Système de routage personnalisé
  - Gestion des assets optimisée avec Vite
  - Support multilingue intégré
  - Système de thèmes clair/sombre

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
├── assets/                     # Ressources statiques
│   ├── css/                    # Styles CSS
│   │   ├── legal-pages.css     # Styles pour pages légales
│   │   └── style.css          # Style principal
│   ├── js/                     # Scripts JavaScript
│   │   └── main.js            # Script principal
│   ├── images/                 # Images et médias
│   │   ├── projects/          # Images des projets
│   │   │   ├── 1.jpg         # Image projet 1
│   │   │   ├── 2.jpg         # Image projet 2
│   │   │   ├── 3.jpg         # Image projet 3
│   │   │   ├── 4.jpg         # Image projet 4
│   │   │   ├── 5.jpg         # Image projet 5
│   │   │   ├── 6.jpg         # Image projet 6
│   │   │   ├── 7.jpg         # Image projet 7
│   │   │   ├── 8.jpg         # Image projet 8
│   │   │   └── 9.jpg         # Image projet 9
│   │   └── profile.jpg        # Photo de profil
│   └── cv/                     # Fichiers CV
│       └── cv.pdf             # CV téléchargeable
│
├── backend/                    # Backend PHP
│   ├── database/              # Base de données
│   │   └── Astuces.md         # Guide de configuration BDD
│   ├── includes/              # Classes et fonctions
│   │   ├── config.php         # Configuration globale
│   │   ├── database.php       # Gestion BDD
│   │   ├── functions.php      # Fonctions utilitaires
│   │   └── router.php         # Système de routage
│   └── init.php               # Initialisation backend
│
├── views/                      # Templates du site
│   ├── layouts/               # Layouts principaux
│   │   └── main.php          # Layout principal
│   ├── pages/                 # Pages du site
│   │   ├── 404.php           # Page d'erreur 404
│   │   ├── about.php         # Page À propos
│   │   ├── contact.php       # Page Contact
│   │   ├── cv.php            # Page CV
│   │   ├── home.php          # Page d'accueil
│   │   ├── mentions-legales.php      # Mentions légales
│   │   ├── politique-confidentialite.php  # Politique de confidentialité
│   │   ├── projects.php      # Page Projets
│   │   └── skills.php        # Page Compétences
│   └── partials/              # Composants réutilisables
│       ├── footer.php         # Pied de page
│       ├── head.php           # En-tête HTML
│       └── header.php         # En-tête de page
│
├── public/                     # Point d'entrée public
│   └── index.php              # Point d'entrée principal
│
├── .env.example               # Exemple de variables d'environnement
├── .eslintrc.json            # Configuration ESLint
├── .gitattributes            # Configuration Git (attributs)
├── .gitignore                # Fichiers ignorés par Git
├── .htaccess                 # Configuration Apache
├── .prettierrc               # Configuration Prettier
├── composer.json             # Configuration Composer
├── composer.lock             # Verrouillage des versions Composer
├── DEPLOIEMENT.md            # Instructions de déploiement
├── index.html                # Page d'accueil statique
├── index.php                 # Point d'entrée principal
├── instruction.txt           # Instructions de développement
├── LICENSE                   # Licence MIT
├── package.json              # Configuration npm
├── package-lock.json         # Verrouillage des versions npm
├── README.md                 # Documentation principale
├── README_HOSTINGER.md       # Instructions spécifiques pour Hostinger
├── verification_site.php     # Script de vérification du site
└── vite.config.js            # Configuration de Vite.js
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

3. **Configuration**:
   - Copiez `.env.example` en `.env` et configurez vos variables d'environnement
   - Assurez-vous que les permissions des dossiers sont correctes (755 pour les dossiers, 644 pour les fichiers)

4. **Démarrage du serveur**:
   ```bash
   # Pour le développement (avec hot reload)
   npm run dev

   # Pour la production
   npm run build
   php -S localhost:8000 -t public
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

## 🚀 Déploiement

### Préparation
1. Compilez les assets pour la production :
   ```bash
   npm run build
   ```

2. Configurez les variables d'environnement :
   - Copiez `.env.example` en `.env`
   - Ajustez les paramètres selon votre environnement

### Hébergement
1. Uploadez tous les fichiers vers votre hébergement
2. Assurez-vous que le document root pointe vers le dossier `public/`
3. Configurez les permissions :
   - 755 pour les dossiers
   - 644 pour les fichiers
   - 755 pour les scripts PHP

### Configuration du serveur
- Activez le module `mod_rewrite` d'Apache
- Assurez-vous que PHP 8.0+ est installé
- Configurez les extensions PHP nécessaires

Pour plus de détails sur le déploiement, consultez le fichier [DEPLOIEMENT.md](DEPLOIEMENT.md)

## 📞 Support et contact

Si vous avez des questions ou souhaitez entrer en contact, n'hésitez pas à m'écrire :

- Email principal : [hugo.bisserier.pro@gmail.com](mailto:hugo.bisserier.pro@gmail.com)
- Email secondaire : [hugo.bisserier@ynov.com](mailto:hugo.bisserier@ynov.com)
- GitHub : [github.com/MentalOfCrow](https://github.com/MentalOfCrow)
- LinkedIn : [linkedin.com/in/hugo-bisserier-a67327324](https://www.linkedin.com/in/hugo-bisserier-a67327324/)

## 📄 Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

---

Merci d'avoir pris le temps de consulter mon portfolio ! 🙌

## 📂 Structure des dossiers principaux

### `/assets`
- `css/` : Styles CSS du site
- `js/` : Scripts JavaScript
- `images/` : Images et médias
- `cv/` : Fichiers CV

### `/views`
- `layouts/` : Templates principaux
- `pages/` : Pages du site
- `partials/` : Composants réutilisables

### `/backend`
- `database/` : Scripts et configuration de la base de données
- `includes/` : Classes et fonctions PHP
- `init.php` : Initialisation du backend

### `/public`
- Point d'entrée public du site
- Fichiers accessibles via le navigateur
- Configuration Apache (.htaccess)