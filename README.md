# Expression de Besoin
## Contexte
Un cinéma souhaite développer un site web permettant de gérer les films, les séances, et les réservations. Ce site sera accessible par deux types d'utilisateurs :
1. Administrateurs : gèrent les films, les séances, et supervisent les réservations.
2. Utilisateurs (clients) : consultent les films disponibles, réservent des places, et accèdent à leurs réservations passées.
L’objectif est de moderniser le système actuel en automatisant ces processus pour une meilleure expérience client et une gestion simplifiée pour les administrateurs.
---
## Objectifs Principaux
### Gestion du Catalogue de Films et des Séances
- Ajouter, modifier, et supprimer des films disponibles.
- Planifier les séances (date, heure, salle) pour les films.
### Réservations Simplifiées pour les Clients
- Permettre aux utilisateurs de réserver facilement des places pour des séances.
- Proposer un espace personnel pour consulter les réservations passées.
### Administration Optimisé
- Offrir aux administrateurs une interface pour superviser les réservations et gérer les contenus (films, séances, utilisateurs).
---
## Public Cible
1. **Administrateurs du cinéma** :
- Responsable de la gestion des films, séances, et des réservations.
- Suivi des statistiques sur les réservations et les séances.
2. **Clients** :
- Accès au catalogue des films et aux horaires.
- Possibilité de réserver des places pour des séances spécifiques.
- Historique des réservations accessible via un espace personnel.
---
## Cahier des Charges
### Structure et Contenu du Site
**Page d'accueil**
- Présentation du cinéma (nom, mission).
- Mise en avant des films à l’affiche avec affiches et résumés.

**Section Utilisateur (Clients)**
- Inscription et Connexion : Formulaire sécurisé pour créer et gérer un compte client.
- Catalogue des Films : Liste des films disponibles avec affiches, genres, et résumés.
- Planning des Séances : Planning des séances pour chaque film (date, heure, salle).

**Réservations**
 - Formulaire pour réserver des places pour une séance.
 - Consultation des réservations passées dans l’espace personnel.

**Section Administrateur**
- Gestion des Films : Ajouter, modifier, et supprimer des films.
- Gestion des Séances : Planifier, modifier, et supprimer des séances.
- Supervision des Réservations : Consulter les réservations par séance ou utilisateur.
- Gestion des Utilisateurs : Ajouter, modifier, et supprimer des utilisateurs (clients et autres admins).

**Section Contact**
- Formulaire pour poser des questions ou signaler un problème.
---
### Spécifications Techniques
**Gestion des Profils Utilisateurs**
- Chaque utilisateur est défini par : nom, prénom, email, mot de passe.
- Rôles possibles :
 - Client : réservation et consultation de films.
 - Administrateur : gestion des films, séances, utilisateurs, et réservations.
- Un administrateur peut gérer les comptes utilisateurs via un tableau de bord.

**Gestion des Films**
- Un film est défini par : titre, description, genre, durée, et une affiche (image).

**Gestion des Séances**
- Une séance est définie par : film associé, date, heure, salle, nombre de places disponibles.

**Réservations**
- Une réservation est définie par : utilisateur, séance, nombre de places réservées.
- Validation des réservations en fonction des places disponibles pour une séance.
---
### Fonctionnalités Techniques
**Sécurité et Confidentialité**
- Authentification des utilisateurs via des sessions PHP.
- Protection contre les attaques courantes (injections SQL, XSS).
- Chiffrement des mots de passe avec password_hash().

**Base de Données**
- Tables principales :
 - users : ID, nom, prénom, email, mot de passe, rôle.
 - films : ID, titre, description, genre, durée, affiche.
 - seances : ID, film_id, date, heure, salle, places_disponibles.
 - reservations : ID, user_id, seance_id, nombre_places.
---
## Rendus Attendues
1. Schéma de la base de données.
2. Code source complet.
3. Documentation technique et utilisateur.
4. Rapport de sécurité.
5. Projet déployé sur un serveur ou plateforme locale.
---
## Évolutivité
Le site pourra évoluer avec des fonctionnalités supplémentaires :
1. Paiement en ligne pour réserver les places.
2. Gestion de plusieurs cinémas (pour des groupes).
3. Notifications par email pour les réservations et événements.
