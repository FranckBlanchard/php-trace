# PHP-trace

PHP-trace est une classe **PHP**, qui permet d'enregistrer différentes informations dans une base de données. Cette classe n'a pas pour but de faire concurrence à une classe de type logging comme klogger. Il n'y a pas de priorité de niveau pour l'enregistrement de message.
Un message est composé d'un champ *date*, un champ *type*, et un champ *message*.
Le champ *date* est automatique. Les autres champs sont renseignés à l'exécution.

# Organisation des sources

Les fichiers sources relatives à la classe se trouvent dant le répertoire **src/Trace**.

Le répertoire **app** contient le fichier de configuration, et de définition des services pour le test de la classe.

Le fichier *app.php* est le fichier a exécuter pour tester la classe.

# Utiliser la classe **Trace**

Pour tester la classe, en ligne de commande faire:

    php app.php  

Tous les fichiers sont commentés pour fournir les explications.
Nous utilisons, le *DIC Pimple* pour se simplifier la vie.
Nous utilisons l'autoloading de *Composer* pour charger les différentes classes.
  
# Avertissement

Pour l'instant rien n'est figé, et la classe n'est pas encore fonctionnelle. 