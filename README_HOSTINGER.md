# GitHub → Hostinger

Hostinger permet de connecter un dépôt GitHub depuis hPanel et de redéployer automatiquement la branche choisie lorsqu’elle reçoit de nouveaux commits. Cette automatisation doit être reliée exclusivement à `main`, après validation et fusion de la refonte.

Documentation officielle : [déployer un dépôt Git sur Hostinger](https://www.hostinger.com/support/1583302-how-to-deploy-a-git-repository-in-hostinger/).

## 1. Déploiement Git initial

Dans hPanel :

1. ouvrir le site `hugobisserier.com` ;
2. accéder à **Git** dans les outils avancés ;
3. connecter le compte GitHub `MentalOfCrow` avec l’autorisation OAuth demandée par Hostinger ;
4. sélectionner le dépôt `MentalOfCrow/dev-portfolio` ;
5. sélectionner exclusivement la branche `main` ;
6. définir le chemin de déploiement sur la racine de `public_html` ;
7. lancer un premier déploiement et vérifier le commit ainsi que le journal affichés dans hPanel.

Ne renseigner aucun mot de passe, jeton ou webhook dans un fichier du projet. L’autorisation GitHub reste gérée entre GitHub et Hostinger.

## 2. Déploiement automatique

Après le premier déploiement réussi :

1. dans la vue Git du site Hostinger, activer **Auto Deployment** pour `main` ;
2. vérifier que l’intégration affiche le dépôt, la branche et le dernier commit attendus ;
3. effectuer un petit commit de test après approbation ;
4. contrôler le statut et le journal dans l’onglet des déploiements ;
5. une fois le mécanisme natif validé, supprimer dans GitHub l’ancien webhook personnalisé qui répond actuellement en 404.

Ne jamais recréer un `deploy.php` public chargé d’exécuter un `git pull`. Un tel endpoint ajouterait une surface d’attaque inutile et contournerait les contrôles de la pull request.

## 3. Comportement attendu

```text
branche de travail → pull request → contrôles GitHub → fusion sur main
                                                     ↓
                                      intégration Git native Hostinger
                                                     ↓
                                      mise à jour de hugobisserier.com
```

Il ne s’agit pas d’une mise à jour à chaque frappe : le site est publié après un push sur `main`, généralement après fusion de la pull request.

## 4. Vérifications après déploiement

- page d’accueil et navigation ;
- CSS, JavaScript, portrait et images WebP ;
- téléchargement des CV ;
- erreur 404 ;
- absence d’accès à `/views/`, `/docs/`, `/scripts/` et aux anciens rapports ;
- présence des en-têtes de sécurité ;
- absence d’erreur dans les journaux Hostinger.

## 5. Variante GitHub Actions

Un déploiement par SSH depuis GitHub Actions est aussi possible, mais il ajoute une clé privée, des secrets et davantage de configuration. Pour ce site PHP sans build, le webhook Git natif Hostinger est plus simple. Si cette variante devient nécessaire, les identifiants devront rester exclusivement dans GitHub Actions Secrets et l’accès SSH devra être limité.
