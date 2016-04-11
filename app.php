<?php

require __DIR__ . '/vendor/autoload.php';

/** start container building * */
$container = new \Pimple\Container();
require __DIR__ . '/app/config.php';
require __DIR__ . '/app/services.php';
/** end container building * */
/** cretion de l'instance Trace * */
$trace = $container['trace'];
/** On affiche la version de la classe pour vérifier que tout fonctionne * */
echo "\n" . $trace->getVersion() . "\n\n";


