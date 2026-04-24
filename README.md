#  EduSync - Système d'Authentification PHP

##  Objectif du projet
EduSync est un projet backend développé en PHP qui permet de gérer un système complet d'authentification utilisateur.  
L’objectif est de pratiquer la création d’un système sécurisé basé sur les sessions PHP.



##  Structure du projet
Le projet est organisé de manière professionnelle pour séparer les responsabilités :

- **public/** : contient les pages accessibles par l’utilisateur (index, login, register, dashboard)
- **scripts/** : contient la logique backend (traitement du formulaire d’authentification)
- **includes/** : contient les éléments réutilisables comme la navbar (header)
- **assets/** : contient les fichiers CSS, JS et images
- **config/** : contient la connexion à la base de données


##  Fonctionnalités du système

###  Inscription
Permet à un utilisateur de créer un compte en saisissant ses informations (nom, prénom, email, mot de passe).  
Les données sont validées et sécurisées avant traitement

###  Connexion
Permet à un utilisateur de se connecter en vérifiant ses identifiants.  
En cas de succès, l’utilisateur est redirigé vers son espace personnel.


###  Validation des données
Toutes les données reçues sont contrôlées :
- Vérification des champs obligatoires
- Vérification du format email
- Nettoyage des données pour éviter les failles XSS


###  Sessions PHP
Le système utilise les sessions pour mémoriser l’utilisateur connecté.  
Cela permet de maintenir l’état de connexion entre les pages.


###  Dashboard protégé
Le tableau de bord est accessible uniquement aux utilisateurs connectés.  
Les utilisateurs non authentifiés sont automatiquement redirigés vers la page de connexion.


###  Déconnexion
L’utilisateur peut se déconnecter à tout moment.  
Cela supprime la session et sécurise la sortie du système.


###  Navbar dynamique
Une barre de navigation commune est utilisée dans toutes les pages.  
Elle s’adapte automatiquement selon l’état de connexion de l’utilisateur.


##  Sécurité du projet
Le projet applique des bonnes pratiques de sécurité :
- Validation des entrées utilisateur
- Protection contre les injections et XSS
- Gestion sécurisée des sessions
- Contrôle d’accès aux pages sensibles



## Objectif pédagogique
Ce projet permet de comprendre :
- Le fonctionnement des sessions PHP
- La communication entre frontend et backend
- La structuration d’un projet web
- Les bases de la sécurité web

## Résultat attendu
Un système d’authentification simple, fonctionnel et bien organisé, proche d’un vrai projet professionnel backend.
