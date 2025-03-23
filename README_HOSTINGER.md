# 🚀 Déploiement automatique Hostinger avec GitHub

## 📁 Structure du projet

```
dev-portfolio/
├── api/               # Points d'accès API
├── assets/            # Fichiers statiques (images, JS, CSS...)
├── backend/           # Initialisation + logique serveur
├── uploads/           # Fichiers envoyés par les utilisateurs
├── views/             # Fichiers de présentation HTML/PHP
├── index.php          # Point d'entrée principal
├── .htaccess          # Routage et sécurité
├── composer.json      # Dépendances PHP
├── vite.config.js     # Config frontend (Vite)
├── README_HOSTINGER.md (ce fichier)
```

## 🔗 Étapes de déploiement avec Hostinger

1. **Créer un dépôt Git sur GitHub** (privé ou public)
2. **Envoyer les fichiers** de ce projet vers ce dépôt
3. Sur Hostinger :
   - Aller dans `Sites > Gérer > Git`
   - Ajouter le dépôt Git :
     - Branche : `main`
     - Répertoire : vide (laisser vide pour que le site soit servi depuis `public_html`)
   - Cliquer sur **"Déploiement automatique"**
   - Copier l’**URL Webhook**
4. Sur GitHub :
   - Aller dans `Settings > Webhooks > Add webhook`
   - Coller l’URL Webhook de Hostinger
   - Content type : `application/json`
   - Cocher **"Just the push event"**
   - Valider

✅ À chaque `git push`, le site sera automatiquement mis à jour sur Hostinger !

---

## 🛠️ En cas de problème

- Assure-toi que `index.php` est bien à la racine du projet
- Vérifie que le `.htaccess` est bien présent
- Ton domaine pointe vers `public_html` (racine du dépôt cloné)

---

Bon déploiement 🎉
