# Portfolio — Hugo Bisserier

Portfolio professionnel orienté cybersécurité, infrastructure, réseau, développement full stack et applications mobiles.

Production : [hugobisserier.com](https://hugobisserier.com/)<br>
Profil GitHub : [MentalOfCrow](https://github.com/MentalOfCrow)

## Architecture

- PHP 8.2 pour le contrôleur frontal et les composants partagés ;
- HTML sémantique, CSS natif et JavaScript sans framework ;
- aucune base de données, session, API, collecte ou formulaire serveur ;
- aucune police, feuille de style ou bibliothèque chargée depuis un CDN ;
- images de projet optimisées en WebP ;
- règles Apache et en-têtes de sécurité dans `.htaccess`.

## Lancer le site

```bash
npm ci --ignore-scripts
npm test
php -S 127.0.0.1:8000
```

Ouvrir ensuite `http://127.0.0.1:8000`.

## Vérifications

`npm test` contrôle notamment :

- la syntaxe PHP et JavaScript ;
- les ressources locales référencées ;
- les liens externes ouverts dans un nouvel onglet ;
- l’absence de scripts ou styles inline incompatibles avec la CSP ;
- l’absence de liens vers les anciens rapports de stage ;
- plusieurs motifs courants de secrets accidentellement commités.

La même validation est exécutée dans GitHub Actions avant fusion.

## Données publiques

- Les CV français et anglais restent téléchargeables dans `assets/cv/`.
- Les anciens rapports de stage et visuels ne font plus partie du dépôt publié.
- Le compteur de dépôts GitHub est un instantané daté, sans jeton ni appel API côté client.
- Les informations de contact publiques sont l’e-mail professionnel, GitHub, LinkedIn et le nom d’utilisateur Discord `ramenmakidaki`.

## Déploiement Hostinger

Le guide [README_HOSTINGER.md](README_HOSTINGER.md) décrit le déploiement Git initial et l’activation ultérieure du webhook GitHub → Hostinger. Aucun secret d’hébergement ne doit être ajouté au dépôt.

## Documentation

- [Plan directeur](docs/MASTER_PLAN.md)
- [Plan de session](docs/PLAN_SESSION.md)
- [Déploiement et sécurité](DEPLOIEMENT.md)

## Licence

Code distribué sous licence MIT. Les contenus personnels, CV, portrait et visuels de projet restent attachés à ce portfolio et ne sont pas accordés comme modèles de profil génériques.
