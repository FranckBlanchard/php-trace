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

    /**
     * Paramètres optionnel de configuration
     *
     * @var array 
     */
    protected $parameters;

    function __construct(\PDO $pdo, array $parameters = null) {
        $this->pdo = $pdo;
        $this->parameters = $parameters;
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
        if (isset($this->parameters['dtz'])) {
            $date = new \DateTime(null,new \DateTimeZone($this->getParameter('dtz')));
        } else {
            $date = new \DateTime();
        }

        return $date->format('Y-m-d H:i:s');
    }

    /**
     * Enregistre un paramètre.
     * 
     * @param string|int $key
     * @param mixed $value
     */
    public function setParameter($key, $value) {
        $this->parameters[$key] = $value;
    }

    /**
     * Retourne un paramètre
     * 
     * @param string|int $key
     * 
     * @return mixed
     */
    public function getParameter($key) {
        $default = null;
        if (isset($this->parameters[$key])) {
            return $this->parameters[$key];
        }
        return $default;
    }

}
