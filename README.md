# Gestionnaire de Projets

## Technologies utilisées

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![Vite](https://img.shields.io/badge/Vite-7.0-646CFF.svg)](https://vitejs.dev)
[![PHP](https://img.shields.io/badge/PHP-8.2-777BB4.svg)](https://www.php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-00618A.svg)](https://www.mysql.com)

Application web destinée à la gestion des projets d’ingénierie en protection incendie.  
Elle permet aux administrateurs de gérer les employés/dessinateurs, de suivre l’avancement des projets, d’ajouter des notes techniques et d’organiser efficacement les demandes de plans.

Développée avec **Laravel 12**, **Vite**, **PHP 8.2** et **MySQL 8**.

---

## 🚀 Fonctionnalités principales

### 🔐 Authentification & sécurité
- Connexion (Jetstream)
- Vérification d’email
- Réinitialisation de mot de passe
- Gestion du profil utilisateur
- Sessions multiples
- Authentification à deux facteurs (optionnel)

### 🧑‍💼 Gestion des utilisateurs (Admin)
- Création de comptes employés/dessinateurs
- Modification des informations
- Activation/désactivation des comptes
- Suppression des comptes
- Attribution des rôles (`admin`, `designer`)

### 📁 Gestion des projets
- Création de projets
- Assignation à un employé
- Suivi de l’avancement
- Statuts personnalisés
- Historique des modifications
- Recherche et filtrage

### 📝 Notes & documentation
- Ajout de notes internes liées à un projet
- Suivi des demandes de plans (architecture, plomberie, structure, électricité, ventilation, etc.)
- Archivage automatique
- Pièces jointes (optionnel)

### 📊 Tableau de bord
- Vue d’ensemble des projets en cours
- Projets par employé
- Statistiques internes
- Notifications en temps réel

---

_Développé avec ❤️ pour optimiser la gestion des projets en ingénierie incendie._