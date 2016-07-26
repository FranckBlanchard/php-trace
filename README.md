# Trace

Trace est une classe **PHP**, qui permet d'enregistrer différentes informations dans une base de données. Cette classe n'a pas pour but de faire concurrence à une classe de type logging comme klogger. Il n'y a pas de priorité de niveau pour l'enregistrement de message.

Un message est composé d'un champ *date_msg*, un champ *type*, et un champ *msg*.

Le champ *date_msg* correspond à la date courante, mais il est possible de déterminer un fuseau horaire spécifique avec la classe **Trace**.

Le champ *type* correspond à un type de message, comme debug, login etc.. Il n'y a pas de type prédéfini, le choix est à votre discrétion.

Le champ *msg* message quant à lui est l'information dont vous voulez enregistrer une trace. 

# Organisation des sources

Les fichiers sources relatives à la classe se trouvent dans le répertoire **src/Trace**.

Le répertoire **app** contient le fichier de configuration (config.php), et de définition des services (services.php) pour le test de la classe.

Le fichier *app.php* est le fichier a exécuter pour tester la classe. En ligne de commande taper 
 **php** *app.php*

# Utiliser la classe **Trace**

Pour enregistrer un message avec la classe **Trace**, il suffit d'appeler la fonction **write** et de lui fournir deux arguments, le type de message, et le message.

Exemple:

$trace->write('login','Mario vient de se connecter');


Le fichier *app.php* est un exemple d'utilisation. Il s'utilise en ligne de commande, et tout le code est commenté.



## Les paramètres optionnels

Les paramètres optionnels, peuvent être fournis au constructeur (2ème argument) via un tableau, ou à l'aide de la fonction setParameter();

**dtz** : définit le fuseau horaire. La liste compatible des fuseaux se trouve à l'adresse suivante :  [http://php.net/manual/fr/timezones.php](http://php.net/manual/fr/timezones.php). Par défaut la classe utilise le fuseau horaire de la machine sur laquelle elle est utilisée.

**tbl** : définit le nom de la table de la base de données. Par défaut la valeur est trace.

# Remarques

Tous les fichiers sont commentés pour les explications. Si ce n'est pas clair je me ferais un plaisir de vous répondre.

Nous utilisons, le *DIC Pimple* pour se simplifier la vie, mais ce n'est pas une obligation.

Nous utilisons l'autoloading de *Composer* pour charger les différentes classes.

Le fichier *trace.sql*, contenu dans le même répertoire que la classe **Trace**, est le fichier **sql** pour la création de la table, nécessaire pour l'enregistrement des informations.

# Avertissement

Cette classe est fournit sans aucunes garanties. Son utilisation n'engage aucunes responsabilités de l'auteur, de quelques manières que ce soit. Vous seul, être responsable de son utilisation.
