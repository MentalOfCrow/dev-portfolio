# Déploiement et sécurité

## Modèle de publication

La branche `main` est la seule source de production. Toute modification passe par une branche, les contrôles automatisés et une pull request avant fusion.

Le site ne demande aucun build de production : Hostinger sert directement `index.php`, `.htaccess`, `views/` et `assets/` depuis `public_html`.

## Contrôles avant fusion

```bash
npm ci --ignore-scripts
npm test
php -S 127.0.0.1:8000
```

Vérifier ensuite :

1. les pages desktop et mobile ;
2. les versions française et anglaise ;
3. les thèmes clair et sombre ;
4. les liens GitHub, LinkedIn et documentation ;
5. les téléchargements des deux CV ;
6. l’absence d’accès aux rapports, dossiers internes et fichiers de configuration ;
7. les en-têtes CSP, HSTS, anti-framing et Permissions-Policy.

## Surface d’attaque réduite

- Aucun formulaire, upload ou endpoint POST.
- Aucun compte, cookie serveur ou session PHP.
- Aucune connexion à une base de données.
- Aucune dépendance JavaScript de production.
- Aucune clé GitHub ou Hostinger dans le navigateur.
- Dossiers `views/`, `docs/`, `scripts/` et fichiers de configuration bloqués par Apache.
- Politique CSP sans `unsafe-inline` ni ressource tierce.

## Limites honnêtes

Une sécurité absolue n’existe pas. Les principaux risques restants se trouvent dans l’hébergement, le compte Hostinger, le domaine, la chaîne GitHub et la configuration du serveur. Il faut donc aussi :

- activer l’authentification à deux facteurs sur GitHub et Hostinger ;
- utiliser un mot de passe unique et un gestionnaire de mots de passe ;
- protéger le compte du registrar et activer le verrouillage du domaine ;
- surveiller les journaux Hostinger et maintenir PHP à jour ;
- limiter les personnes et clés ayant accès au déploiement ;
- conserver le webhook de déploiement comme une information sensible.

## Retour arrière

En cas de problème après fusion :

1. identifier le dernier commit sain ;
2. créer un commit de revert sur une branche dédiée ;
3. laisser les contrôles GitHub s’exécuter ;
4. fusionner le revert ;
5. redéployer automatiquement ou utiliser le bouton de déploiement Hostinger.

Ne jamais modifier l’historique de `main` avec un push forcé.
