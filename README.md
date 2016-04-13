# PHP-trace

PHP-trace est une classe **PHP**, qui permet d'enregistrer différentes informations dans une base de données. Cette classe n'a pas pour but de faire concurrence à une classe de type logging comme klogger. Il n'y a pas de priorité de niveau pour l'enregistrement de message.
Un message est composé d'un champ *date*, un champ *type*, et un champ *message*.
Le champ *date* est automatique. Les autres champs sont renseignés à l'exécution.

# Organisation des sources

Les fichiers sources relatives à la classe se trouvent dant le répertoire **src/Trace**.

Le répertoire **app** contient le fichier de configuration, et de définition des services pour le test de la classe.

Le fichier *app.php* est le fichier a exécuter pour tester la classe.

# Utiliser la classe **Trace**

Le fichier *app.php* est un exemple d'utilisation. Il s'utilise en ligne de commande, et tout le code est commenté.

## Les paramètres optionnels

Les paramètres optionnels, peuvent être fournis au constructeur (2ème argument) via un tableau, ou à l'aide de la fonction setParameter();

**dtz**:définit le fuseau horaire. La liste compatible des fuseaux se trouve a l'adresse suivante :  [http://php.net/manual/fr/timezones.php](http://php.net/manual/fr/timezones.php). Par défaut la classe utilise le fuseau horaire de la machine sur laquelle elle est utilisée.

# Remarques

Tous les fichiers sont commentés pour les explications.
Nous utilisons, le *DIC Pimple* pour se simplifier la vie.
Nous utilisons l'autoloading de *Composer* pour charger les différentes classes.

# Avertissement

Pour l'instant rien n'est figé, et la classe n'est pas encore fonctionnelle.
