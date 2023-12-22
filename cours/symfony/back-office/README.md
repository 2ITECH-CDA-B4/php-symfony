# Mise en place du back-office (espace d'administration)

## Bundle easyAdmin

- [Documentation](https://symfony.com/bundles/EasyAdminBundle/current/dashboards.html)

## Installation

- `composer require easycorp/easyadmin-bundle`

## Création du dashboard (tableau de bord)

- `php bin/console make:admin:dashboard`

Se laisser guider et répondre aux questions.
Ensuite, il faut se rendre sur la page /admin

## Création des CRUD controllers

Les crud contrôleurs sont des pages CRUD sur nos entités (à chosir et configurer). Ces pages permettent de  lire, créer, modifier et supprimer les entités.

`php bin/console make:admin:crud`

Se laisser guider en choisissant une entité et en répondant aux autres questions

## Configuration du Dashboard

### Menu

Dans votre fichier DashBoardController, dans la méthode configureMenuItems, il vous suffit de rajouter les différents contrôleurs dans cette fonction pour les avoirs dans le menu à gauche de la page du dashboard


`
 public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Hotel', 'fas fa-hotel', Hotel::class);
        yield MenuItem::linkToCrud('Rooms', 'fas fa-bed', Room::class);
        yield MenuItem::linkToCrud('Categories', 'fas fa-layer-group', Category::class);
        yield MenuItem::linkToCrud('Classes', 'fas fa-star', Classe::class);
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Booking', 'fas fa-list', Booking::class);
    }
`

### Page par défaut

Vous avez plusieurs possibilités dans les commentaires, choisissez ce qui convient.

Dans le cas où, vous avez choisi une page par défaut par exemple ici la page de réservation, le code à mettre est : 

`
 public function index(): Response
 {
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);

        return $this->redirect($adminUrlGenerator->setController(BookingCrudController::class)->generateUrl());
 }
`

### Labels, titre, etc

A configurer dans la fonction  ***public function configureDashboard()*** avec des setters.

## Configuration des données des CRUD Controllers

Depuis le fichier généré CrudController de l'entité, il suffit de decommenter la fonction ***public function configureFields***  et la modifier pour avoir la maitrise sur les données à afficher depuis le dashboard ou depuis la page détaillé d'une instance de l'entité concerné