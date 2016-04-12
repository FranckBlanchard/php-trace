<?php

namespace Trace;

/**
 * Trace est uns classe PHP qui permet d'enregistrer des informations, dans une base de données.
 * @author franck blanchard <info@aztequemedia.com>
 *
 */
class Trace {

    /**
     * Numéro de version
     * @var string
     */
    protected $version = 'V0.1.0';

    /**
     * Objet PDO pour accéder a la base de données.
     * @var objet
     */
    protected $pdo;

    function __construct(\PDO $pdo) {
        $this->pdo = $pdo;
    }

    /**
     * Fonction qui retourne la version
     *
     * @return string
     */
    public function getVersion() {
        return 'Trace Version :' . $this->version;
    }

    /**
     * Fonction qui retourne la date et l'heure courante.
     *
     * @return datetime
     */
    public function getDateTime() {
        $date = new \DateTime();
        return $date->format('Y-m-d H:i:s');
    }
}
