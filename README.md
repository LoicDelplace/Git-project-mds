<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 📸 Gestion des Photos de Vacances - Documentation

## 📝 Introduction
Ce projet est une application de gestion d'albums photos utilisant **Laravel** pour le backend et **Vue.js avec Inertia** pour le frontend. Le contrôle de version est effectué avec **Git**, en suivant une méthodologie **Git Flow** pour organiser efficacement le travail collaboratif.

## 📂 Méthodologie Git Flow

### 📋 Concept
Git Flow est un workflow de développement basé sur des branches pour garantir que les développements soient organisés et que la version stable du code reste toujours protégée. Voici les branches principales utilisées :

- **`main`** : Branche principale contenant le code en production. Seules des versions stables et finalisées y sont fusionnées.
- **`develop`** : Branche de développement. Toutes les fonctionnalités terminées et validées sont fusionnées ici pour les tests.
- **`feature/`** : Branche pour développer une nouvelle fonctionnalité. Chaque nouvelle fonctionnalité est créée à partir de `develop`.
- **`hotfix/`** : Branche pour corriger des bugs critiques apparus en production. Créée à partir de `main`.
- **`release/`** : Branche pour préparer une version finale. Une fois prête, elle est fusionnée dans `main` et `develop`.

### 🗂 Structure des branches
- **`main`** : Contient le code de production.
- **`develop`** : Contient le code de développement stable.
- **`feature/nom-de-la-feature`** : Pour les nouvelles fonctionnalités (ex. `feature/ajout-connexion`).
- **`hotfix/description-du-bug`** : Pour corriger les bugs critiques (ex. `hotfix/correction-erreur-connexion`).
- **`release/numero-de-version`** : Préparation d'une nouvelle version stable (ex. `release/v1.0.0`).

## 🏥 Nos problèmes rencontrés
