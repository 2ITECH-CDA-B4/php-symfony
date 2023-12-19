# Cours et documentation

- Classe qui permet de se connecter à une base de données
- Il faut activer l'extension au niveau du fichier php.ini ou de l'interface graphique de WAMP par exemple. Normalement, par défaut, il est activé. Il vient remplacer les anciennes fonctions de mysql comme mysqli_connect, etc.
- Fournir l'URL d'accès à la base de données dont le pattern est 
`new PDO('mysql:host=root;port=3306;dbname=article, user, password);` 