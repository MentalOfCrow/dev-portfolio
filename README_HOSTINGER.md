# GitHub → Hostinger

Hostinger permet de déployer un dépôt Git depuis hPanel et propose une URL de webhook pour déclencher automatiquement un nouveau déploiement à chaque push. Cette automatisation sera activée après validation et fusion de la refonte.

Documentation officielle : [déployer un dépôt Git](https://support.hostinger.com/en/articles/1583302-how-to-deploy-a-git-repository).

## 1. Déploiement Git initial

Dans hPanel :

1. ouvrir le site `hugobisserier.com` ;
2. accéder à **Git** dans les outils avancés ;
3. ajouter `https://github.com/MentalOfCrow/dev-portfolio.git` ;
4. sélectionner la branche `main` ;
5. définir le chemin de déploiement sur la racine de `public_html` ;
6. lancer un premier déploiement et vérifier le journal.

Le dépôt étant public, aucune clé GitHub n’est nécessaire pour la lecture. Ne renseigner aucun mot de passe dans un fichier du projet.

## 2. Déploiement automatique

Après le premier déploiement réussi :

1. dans Hostinger, activer **Auto Deployment** et copier l’URL de webhook ;
2. dans GitHub, ouvrir `Settings → Webhooks → Add webhook` ;
3. coller l’URL Hostinger sans l’enregistrer ailleurs ;
4. choisir `application/json`, conserver la vérification SSL et sélectionner uniquement l’événement `push` ;
5. valider, puis effectuer un petit commit de test après approbation.

L’URL de webhook agit comme un secret : elle ne doit apparaître ni dans le dépôt, ni dans une capture d’écran, ni dans une issue publique.

## 3. Comportement attendu

```text
branche de travail → pull request → contrôles GitHub → fusion sur main
                                                     ↓
                                             webhook Hostinger
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
