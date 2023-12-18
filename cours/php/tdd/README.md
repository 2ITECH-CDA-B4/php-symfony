# Cours et documentation

## introduction

Approche de développement et des bonnes pratiques permettant de rendre une application plus robuste et éviter de faire de la regression de code (modification d'une partie du code qui provoque des bugs ailleurs sans qu'on puisse les détecter tout de suite)

## Stratégie

1. Ecrire un test unitaire d'une fonction qu'on a pas encore codé, ce test va échouer
2. Ecrire le minimum de code qui fait passer ce test au vert
3. Refactoriser son code sans changer le comportement pour améliorer sa lisibilité et sa maintebilité dans le futur tout en s'assurant que le test reste au vert
4. Traiter une autre sorti, scénario de la fonction reprendre à la 1. Lorsque tous les cas de figure possibles ont été testé, passez à une autre fonction et reprenez du début (étape 1)

![tdd](https://camo.githubusercontent.com/9aaad605dfb935089090a39c8a0fc905e1e2c4a834273f02475e0b58a9e00997/68747470733a2f2f7777772e7468696e6b746f636f64652e636f6d2f77702d636f6e74656e742f75706c6f6164732f323031382f30322f7265642d677265656e2d7265666163746f722e706e67)
