## Les tests

## Documentation

- [Toute la doc](https://symfony.com/doc/current/testing.html)

## Installation

`composer require --dev symfony/test-pack`

## Mise en place

1. Créez un fichier .env.test, un copié/collé du .env.local
2. Exécutez la commande `php bin/console doctrine:migrations:migrate --env=test`
3. Créez votre test en tapant la commande `php bin/console make:test`
4. Se laisser guider en choisissant le type (unitaire avec ***TestCase***, KernelTestCase pour tester les composants de symfony par exemple validator, dotrine, etc, WebTestCase pour les tests fonctionnels voir l'explication ci-après)
5. Lancez ses tests avec `php bin/phpunit`

## WebTestCase

Développé en PHP, ultra-rapide, effectue les requêtes du client comme un navigateur le ferait, très utilise pour faire des tests pour les requêtes ou le JS n'intervient pas? car la solution n'execute pas et ne prend pas en compte du JS.

Pour tenir compte du JS, il y a selenium, mais très lourd à mettre en place sinon symfony panther (un navigateur exécuté et peut-être visible)