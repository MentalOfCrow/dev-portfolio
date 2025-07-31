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
  - Architecture orientée objet
  - Système de routage personnalisé

- **Frontend**:
  - HTML5 / CSS3
  - JavaScript (ES6+)
  - Responsive design (mobile-first)
  - Animations CSS fluides
  - Système de thèmes personnalisables

- **Outils**:
  - FontAwesome pour les icônes
  - Google Fonts pour la typographie
  - Système multilingue intégré

## 📷 Aperçu du projet

Ce portfolio a été créé pour mettre en avant mon parcours dans le développement web et la cybersécurité. Il inclut :

- **À propos de moi** : Une brève introduction à mon parcours, mes intérêts et mes objectifs professionnels.
- **Projets** : Un aperçu détaillé de mes projets avec les technologies utilisées et les défis rencontrés.
- **Compétences** : Un résumé des compétences techniques classées par catégories (front-end, back-end, infrastructure).
- **CV** : Consultation et téléchargement de mon CV au format PDF.
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
│   │   │   ├── 10.png        # Image projet 10
│   │   └── profile.jpg        # Photo de profil
│   └── cv/                     # Fichiers CV
│       ├── cv-fr.pdf          # CV français
│       └── cv-en.pdf          # CV anglais
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
├── public/                     # Point d'entrée public (optionnel)
│   └── index.php              # Point d'entrée alternatif
│
├── .gitattributes            # Configuration Git (attributs)
├── .gitignore                # Fichiers ignorés par Git
├── composer.json             # Configuration Composer (optionnel)
├── composer.lock             # Verrouillage des versions Composer
├── DEPLOIEMENT.md            # Instructions de déploiement
├── index.html                # Page d'accueil statique (fallback)
├── index.php                 # Point d'entrée principal
├── instruction.txt           # Instructions de développement
├── LICENSE                   # Licence MIT
├── package.json              # Configuration npm (optionnel)
├── package-lock.json         # Verrouillage des versions npm
├── README.md                 # Documentation principale
├── README_HOSTINGER.md       # Instructions spécifiques pour Hostinger
└── vite.config.js            # Configuration de Vite.js (optionnel)
```

## 🔧 Installation locale

1. **Prérequis**:
   - PHP 8.0 ou supérieur
   - Serveur web (Apache recommandé) ou serveur PHP intégré

2. **Installation**:
   ```bash
   # Cloner le dépôt
   git clone https://github.com/MentalOfCrow/dev-portfolio.git
   cd dev-portfolio

   # Installer les dépendances PHP (si nécessaire)
   composer install

   # Installer les dépendances JavaScript (si nécessaire)
   npm install
   ```

3. **Démarrage du serveur**:
   ```bash
   # Démarrage simple du serveur PHP (recommandé)
   php -S localhost:8000

   # Ou démarrage depuis le dossier racine du projet
   cd dev-portfolio
   php -S localhost:8000
   ```

4. **Accès**:
   - Site web: http://localhost:8000
   - Toutes les pages sont accessibles via la navigation

## 🔍 Description des fichiers clés

### Configuration principale
- `backend/includes/config.php` - Configuration globale du site
- `index.php` - Point d'entrée principal du portfolio

### Points d'entrée
- `index.php` - Page d'accueil et routage principal
- `backend/init.php` - Initialisation du backend (définition des constantes)

### Logique métier
- `backend/includes/functions.php` - Fonctions utilitaires PHP
- `backend/includes/router.php` - Système de routage simplifié 

### Frontend
- `assets/css/style.css` - Style principal du site
- `assets/js/main.js` - Fonctionnalités JavaScript (mode sombre, multilingue)
- `views/layouts/main.php` - Layout principal pour toutes les pages

## 🚀 Déploiement

### Préparation
1. Téléchargez ou clonez tous les fichiers du projet
2. Assurez-vous que PHP 8.0+ est installé sur votre serveur

### Hébergement
1. Uploadez tous les fichiers vers votre hébergement web
2. Pointez votre domaine vers le dossier contenant `index.php`
3. Configurez les permissions si nécessaire :
   - 755 pour les dossiers
   - 644 pour les fichiers

### Configuration du serveur
- Assurez-vous que PHP 8.0+ est installé
- Activez les extensions PHP de base (déjà disponibles sur la plupart des hébergeurs)

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
- Point d'entrée public alternatif du site
- Fichiers accessibles via le navigateur