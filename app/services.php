<?php

/** Fabrication de la chaine dsn  pour la connection a la base de données * */
$container['db.dsn'] = function ($c) {
    return "mysql" . ':dbname=' . $c['db.name'] . ';host=' . $c['db.host'] . ';charset=utf8';
};
/** Fabrication d'une instance PDO * */
$container['pdo'] = function ($c) {
    try {
        $pdo = new \PDO($c['db.dsn'], $c['db.user'], $c['db.pwd'], array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ));
    } catch (PDOException $e) {
        return 'Connection failed: ' . $e->getMessage();
    }
    return $pdo;
};

/** Fabrication d'une instance de Trace* */
$container['trace'] = function ($c) {
    $trace = new \Trace\Trace($c['pdo']);
    return $trace;
};
