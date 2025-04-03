# Blog PHP

Un système de blog simple et efficace développé en PHP.

## Fonctionnalités

- Système d'authentification (inscription/connexion)
- Gestion des articles (création, modification, suppression)
- Système de commentaires
- Interface d'administration
- Design responsive avec CSS

## Prérequis

- PHP 7.0 ou supérieur
- Serveur web (XAMPP, WAMP, etc.)
- MySQL

## Installation

1. Clonez ce dépôt dans votre répertoire web local
2. Configurez votre base de données MySQL
3. Importez le schéma de base de données (fichier SQL)
4. Configurez les accès à la base de données dans [functions.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/functions.php:0:0-0:0)

## Structure du Projet

- [account.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/account.php:0:0-0:0) - Gestion du compte utilisateur
- [addpost.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/addpost.php:0:0-0:0) - Ajout d'articles
- [admin_blog.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/admin_blog.php:0:0-0:0) - Interface d'administration
- [article.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/article.php:0:0-0:0) - Affichage des articles
- [functions.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/functions.php:0:0-0:0) - Fonctions utilitaires
- [index.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/index.php:0:0-0:0) - Page d'accueil
- [style.css](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/style.css:0:0-0:0) - Feuille de style

## Utilisation

1. Créez un compte utilisateur via [sign_in.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/sign_in.php:0:0-0:0)
2. Connectez-vous via [login.php](cci:7://file:///Applications/XAMPP/xamppfiles/htdocs/Blog/login.php:0:0-0:0)
3. Accédez au panneau d'administration pour gérer vos articles
4. Les visiteurs peuvent lire et commenter les articles

## Sécurité

- Protection contre les injections SQL
- Hashage des mots de passe
- Validation des données utilisateur

## Auteur

[Verra Sonny]
