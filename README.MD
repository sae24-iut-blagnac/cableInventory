# CableManagement System

## Description
CableManagement est un système de gestion de câbles permettant de gérer les utilisateurs, les fournisseurs, les catégories de câbles, l'inventaire, et les commandes. Il est conçu pour les administrateurs, les utilisateurs finaux, et les fournisseurs afin de faciliter la gestion des stocks et des commandes de câbles.

## Table des Matières
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Pages du Site](#pages-du-site)
- [Technologies Utilisées](#technologies-utilisées)
- [Contributions](#contributions)
- [Licence](#licence)
- [Contact](#contact)

## Installation

1. Installer Apache2, PHP et mysql :
    ```bash
    sudo apt install apache2
    sudo apt install php
    sudo apt install mysql-server
    cd /var/www/html
    ```


2. Clonez le dépôt :
    ```bash
    git clone https://github.com/sae24-iut-blagnac/cableInventory.git
    ```

2. Accédez au répertoire du projet :
    ```bash
    cd CableManagement
    ```

3. Configurer la BDD :
    ```bash
    sudo mysql
    ```
    ```sql
    CREATE DATABASE cableInventory;
    CREATE USER 'votre-nom-dutilisateur'@'localhost' IDENTIFIED BY 'votre-password';
    GRANT ALL PRIVILEGES ON cableInventory.* TO 'votre-nom-dutilisateur'@'localhost';
    ```


## Utilisation

- Accédez à l'application via `http://localhost/cableInventory/install/`.
- Inscrivez-vous ou connectez-vous pour accéder aux différentes fonctionnalités du site.

## Pages du Site

### Pages Utilisateur
- **Inscription et Connexion** : Permet de créer un compte utilisateur ou de se connecter.
- **Profil Utilisateur** : Affiche et permet de mettre à jour les informations de l'utilisateur.
- **Gestion des Utilisateurs (Admin)** : Permet aux administrateurs de gérer les comptes utilisateurs.

### Pages Produits
- **Liste des Câbles** : Affiche tous les câbles disponibles avec des filtres.
- **Détail d'un Câble** : Affiche les détails d'un câble particulier.
- **Gestion des Câbles (Admin)** : Permet aux administrateurs de gérer les câbles.

### Pages Inventaire
- **Gestion de l'Inventaire** : Affiche l'état de l'inventaire pour chaque câble.
- **Mise à Jour de l'Inventaire (Admin)** : Permet aux administrateurs de mettre à jour les quantités en stock.

### Pages Commandes
- **Création de Commande** : Permet aux utilisateurs de passer des commandes.
- **Suivi des Commandes** : Affiche l'historique des commandes de l'utilisateur.
- **Gestion des Commandes (Admin)** : Permet aux administrateurs de gérer les commandes.

### Pages Fournisseurs
- **Liste des Fournisseurs** : Affiche une liste des fournisseurs avec leurs informations de contact.
- **Détail d'un Fournisseur** : Affiche les détails d'un fournisseur spécifique.
- **Gestion des Fournisseurs (Admin)** : Permet aux administrateurs de gérer les fournisseurs.

### Pages Catégories
- **Liste des Catégories** : Affiche une liste des catégories de câbles disponibles.
- **Gestion des Catégories (Admin)** : Permet aux administrateurs de gérer les catégories de câbles.

### Pages Générales
- **Tableau de Bord (Admin)** : Affiche des statistiques et des rapports sur les ventes et l'inventaire.
- **Page de Contact** : Permet aux utilisateurs de contacter le support ou l'administration.

## Technologies Utilisées
- **Backend** : Node.js, Express
- **Frontend** : React
- **Base de Données** : MySQL
- **ORM** : Sequelize
- **Authentification** : JWT (JSON Web Token)
- **Styles** : CSS, Bootstrap

## Contributions
Les contributions sont les bienvenues ! Veuillez soumettre une pull request ou ouvrir une issue pour toute suggestion.

## Licence
Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Contact
Pour toute question, veuillez contacter [alex@etienne26.fr](mailto:alex@etienne26.fr).
