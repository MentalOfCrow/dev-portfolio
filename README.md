# Portfolio Hugo Bisserier

Site portfolio professionnel présentant mes projets, compétences et expériences.

## Fonctionnalités

- 🌓 Mode clair/sombre
- 🌍 Support multilingue (Français/Anglais)
- 📱 Design responsive
- 🎨 Interface utilisateur moderne et élégante
- 📁 Présentation des projets
- 💼 Affichage des compétences et expériences
- 📧 Formulaire de contact
- 📄 Téléchargement de CV

## Technologies utilisées

- PHP 8.0+ (structure MVC simplifiée)
- HTML/CSS/JavaScript
- Base de données MySQL (minimale)
- FontAwesome pour les icônes
- Google Fonts pour la typographie

## Aperçu du projet

Ce portfolio a été créé pour mettre en avant mon parcours dans le développement web et la cybersécurité. Il inclut :

- **À propos de moi** : Une brève introduction à mon parcours, mes intérêts et mes objectifs professionnels.
- **Projets** : Un aperçu de certains projets sur lesquels j'ai travaillé, avec des détails sur les technologies utilisées et les défis rencontrés.
- **Compétences** : Un résumé des compétences techniques que j'ai acquises, classées par développement front-end, back-end et autres outils pertinents.
- **Blog** : Des articles qui documentent mon processus d'apprentissage, y compris les principaux enseignements tirés de divers projets et technologies.
- **Contact** : Informations sur la façon de me joindre pour des collaborations potentielles ou des questions.

## Recommandations

- **Utilisez Live Server** : Pour une meilleure expérience, visualisez le portfolio en utilisant l'extension Live Server comme décrit ci-dessus.
- **Explorez le code** : N'hésitez pas à explorer les fichiers HTML, CSS et JavaScript du projet pour voir comment tout est construit.


## Structure du projet

```
portfolio/
├── backend/
│   ├── database/         # Structure SQL et scripts
│   └── includes/         # Fonctions PHP, configuration, etc.
├── public/
│   ├── assets/           # CSS, JS, images
│   ├── uploads/          # Fichiers téléchargés (CV, images)
│   ├── views/            # Templates PHP (pages, partials)
│   └── index.php         # Point d'entrée principal
├── vendor/               # Dépendances (autoload)
└── composer.json         # Configuration Composer
```

## Installation locale

1. Clonez ce dépôt
2. Créez une base de données MySQL nommée `portfolio`
3. Importez le fichier `backend/database/portfolio.sql`
4. Configurez la connexion à la base de données dans `backend/includes/config.php` si nécessaire
5. Démarrez un serveur PHP local: `php -S localhost:8000 -t public`
6. Accédez au site via http://localhost:8000

## Migration vers Hostinger

### Configuration de la base de données

1. Créez une nouvelle base de données dans votre panel Hostinger
2. Notez le nom de la base, l'utilisateur et le mot de passe
3. Importez le fichier `backend/database/portfolio.sql` via phpMyAdmin de Hostinger

### Mise à jour de la configuration

Le fichier `backend/includes/config.php` est configuré pour détecter automatiquement l'environnement Hostinger ou le domaine hugobisserier.com. Vous devez mettre à jour:



### Upload des fichiers

1. Téléchargez tous les fichiers sur votre hébergement via FTP ou le gestionnaire de fichiers de Hostinger
2. Assurez-vous que le document root pointe vers le dossier `public/`
3. Vérifiez les permissions des dossiers (744 pour les fichiers, 755 pour les dossiers)

### Remarques importantes

- Ce portfolio fonctionne actuellement sans utiliser activement la base de données
- Toutes les données (projets, compétences) sont codées en dur dans les fichiers PHP
- La structure de base de données est incluse pour répondre aux exigences d'hébergement et pour des fonctionnalités futures

## Support et contact
Si vous avez des questions ou souhaitez entrer en contact, n'hésitez pas à m'écrire à [hugo.bisserier@ynov.com](mailto:hugo.bisserier@ynov.com).

Merci d'avoir pris le temps de consulter mon portfolio !
