# Plan directeur — refonte du portfolio

## Objectif

Présenter Hugo Bisserier comme un profil orienté cybersécurité, infrastructure et réseau, avec une pratique solide du développement full stack et mobile. Le site doit être moderne, rapide, accessible, facile à maintenir et déployable automatiquement sur Hostinger depuis GitHub.

## Principes de produit

- Priorité éditoriale : cybersécurité, systèmes/réseaux, infrastructure, puis développement.
- Message exact : entrée en quatrième année en septembre 2026 et parcours 2026–2028 à l’Aéroport Marseille Provence.
- Contact principal pour les collaborations : Discord `ramenmakidaki`, puis e-mail, GitHub et LinkedIn.
- Aucun numéro de téléphone public.
- CV français et anglais téléchargeables ; rapports de stage retirés du site public.
- Projets publics sélectionnés depuis GitHub, sans fausse démo. Les travaux privés sont présentés sans révéler leur contenu.
- Compteur GitHub figé à une date donnée, sans jeton ni appel API côté navigateur.

## Direction visuelle

- Univers sombre éditorial, bleu nuit et accents cyan/bleu électrique, sans cliché “hacker vert”.
- Typographie système rapide et respectueuse de la vie privée.
- Grille lisible, titres forts, cartes compactes, bordures nettes et animations sobres.
- Illustrations cohérentes et originales pour les projets, optimisées en WebP.
- Mode clair/sombre, navigation clavier, contrastes AA et réduction des mouvements respectée.

## Architecture cible

- PHP 8 léger pour le routage et les composants partagés.
- HTML sémantique, CSS natif et JavaScript minimal sans framework ni CDN.
- Aucun formulaire serveur, aucune base de données, aucun upload, aucune session et aucun secret requis.
- Une feuille de style principale et un script principal.
- En-têtes Apache dans `.htaccess`, politique CSP stricte, HTTPS, anti-framing et blocage des fichiers internes.

## Sections

1. Accueil : positionnement, disponibilité collaboration, chiffres clés et appels à l’action.
2. À propos : trajectoire, méthode de travail, bug bounty et plateformes.
3. Compétences : matrice compacte, ordonnée et cliquable vers les documentations officielles.
4. Expériences : SHF, MEB, Sicomin et Aéroport Marseille Provence, avec détails factuels.
5. Projets : sélection publique, travaux privés et futur projet mobile cyber.
6. CV : aperçu du profil et téléchargement FR/EN.
7. Contact : Discord copiable, e-mail, GitHub et LinkedIn.
8. Mentions légales et confidentialité : textes adaptés à un site sans collecte.

## Sécurité

- Sortir les rapports et anciens visuels de la branche publique active.
- Ne jamais publier de mot de passe, webhook, clé SSH ou jeton Hostinger/GitHub.
- Refuser l’indexation des répertoires, bloquer les dotfiles, sauvegardes et fichiers de configuration.
- Déployer uniquement après lint, tests PHP/JS, contrôle des liens et vérification visuelle.
- Conserver les secrets de déploiement dans Hostinger ou GitHub Actions Secrets.

## Déploiement

Phase 1 : fusionner la refonte validée sur `main`.

Phase 2 : activer le déploiement automatique Hostinger par webhook Git, avec la branche `main` comme seule source de production. Le webhook reste dans les paramètres Hostinger/GitHub et n’est jamais commité.

## Validation

- Validation syntaxique PHP, JavaScript, HTML et CSS.
- Vérification de tous les liens internes et externes.
- Tests desktop, tablette et mobile sur Chromium.
- Audit Lighthouse/accessibilité et contrôle des en-têtes de sécurité.
- Comparaison visuelle avec la version en production avant fusion.
