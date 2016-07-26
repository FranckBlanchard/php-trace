<?php

require __DIR__ . '/vendor/autoload.php';

/** start container building * */
$container = new \Pimple\Container();
require __DIR__ . '/app/config.php';
require __DIR__ . '/app/services.php';
/** end container building * */
/** Création de l'instance Trace * */
$trace = $container['trace'];
/** On affiche la version de la classe pour vérifier que tout fonctionne * */
echo "\n" . $trace->getVersion() . "\n";
echo "\n" . $trace->getDateTime() . "\n";
/** On enregistre un paramètre * */
$trace->setParameter('dtz', 'Europe/Paris');
/** on affiche le paramètre * */
echo $trace->getParameter('dtz') . "\n";
/** On affiche la date avec le nouveau fuseau horaire * */
echo "\n" . $trace->getDateTime() . "\n";
/** Affichage du nom de la table * */
echo $trace->getParameter('tbl') . "\n";
/** On affiche un paramètre null * */
echo $trace->getParameter('erreur') . "\n";
/** On affiche un message * */
$trace->write('log-in', "franck s'est connecté.");
$trace->write('log-out', "franck s'est déconnecté");
