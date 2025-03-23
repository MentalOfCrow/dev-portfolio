<<<<<<< Updated upstream
<<<<<<< Updated upstream
# portfolio
 
# Portfolio de Hugo Bisserier

Bienvenue sur mon portfolio personnel ! Ce projet présente mes compétences, mes expériences et mes réalisations dans le domaine du développement web. Il a été conçu pour offrir aux visiteurs un aperçu détaillé de mon travail, incluant à la fois mes capacités techniques et mon approche des différents défis.

## Comment visualiser le projet

Pour profiter pleinement de ce portfolio, je recommande de le visualiser en utilisant l'extension Live Server dans Visual Studio Code. Cela garantit que toutes les fonctionnalités fonctionnent parfaitement et que vous profitez de l'expérience telle qu'elle a été conçue.

### Prérequis

1. **Visual Studio Code** : Assurez-vous d'avoir [Visual Studio Code](https://code.visualstudio.com/) installé sur votre machine.

2. **Extension Live Server** : Installez l'extension Live Server dans Visual Studio Code. Si vous ne l'avez pas encore installée, suivez ces étapes :

   - Ouvrez Visual Studio Code.
   - Accédez à la vue des Extensions en cliquant sur l'icône en forme de carré dans la barre latérale ou en appuyant sur `Ctrl+Shift+X`.
   - Dans la barre de recherche, tapez `Live Server`.
   - Cliquez sur le bouton "Installer" à côté de l'extension Live Server par Ritwick Dey.

   ![Installation de Live Server](img/lancementprojet.png) = Extension le plus simple et important pour que ca fonctionne

   ![Utilité de Live Server](img/liveServeurUtile.png) = Séléctionner le fichier index.html puis lancer le serveur en bas à droite pour acceder au projet

### Lancement du projet

1. Clonez ou téléchargez les fichiers du projet sur votre machine.

2. Ouvrez le dossier du projet (`portfolio`) dans Visual Studio Code.

3. Faites un clic droit sur le fichier `index.html` dans la barre latérale de l'Explorateur et sélectionnez "Open with Live Server".

4. Votre navigateur par défaut devrait automatiquement ouvrir le projet. Si ce n'est pas le cas, vous pouvez manuellement naviguer à l'adresse `http://127.0.0.1:5500/index.html` (ou l'URL localhost appropriée indiquée dans votre terminal).

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

## Contact

Si vous avez des questions ou souhaitez entrer en contact, n'hésitez pas à m'écrire à [hugo.bisserier@ynov.com](mailto:hugo.bisserier@ynov.com).

Merci d'avoir pris le temps de consulter mon portfolio !
=======
=======
>>>>>>> Stashed changes
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

```php
// Configuration BD pour Hostinger
define('DB_HOST', 'localhost');
define('DB_NAME', 'portfolio'); // ou le nom que vous avez choisi
define('DB_USER', 'portfolio_user'); // remplacez par votre utilisateur Hostinger
define('DB_PASS', 'portfolio_password'); // remplacez par votre mot de passe Hostinger
```

### Upload des fichiers

1. Téléchargez tous les fichiers sur votre hébergement via FTP ou le gestionnaire de fichiers de Hostinger
2. Assurez-vous que le document root pointe vers le dossier `public/`
3. Vérifiez les permissions des dossiers (744 pour les fichiers, 755 pour les dossiers)

### Remarques importantes

- Ce portfolio fonctionne actuellement sans utiliser activement la base de données
- Toutes les données (projets, compétences) sont codées en dur dans les fichiers PHP
- La structure de base de données est incluse pour répondre aux exigences d'hébergement et pour des fonctionnalités futures

## Support et contact

Pour toute question ou assistance: hugo.bisserier.pro@gmail.com
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
