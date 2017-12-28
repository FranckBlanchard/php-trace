<?php

namespace Trace;

/**
 * Trace est une classe PHP qui permet d'enregistrer des informations, dans une base de données.
 * @author franck blanchard <info@aztequemedia.com>
 *
 */
class Trace {

    /**
     * Numéro de version
     * @var string
     */
    protected $version = '0.1.0';

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

    /**
    * Constucteur de la Class
    */
    function __construct(\PDO $pdo, array $parameters = array('tbl' => 'trace')) {
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
            $date = new \DateTime(null, new \DateTimeZone($this->getParameter('dtz')));
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

    /**
     * Enregistre un message dans la base de données
     *
     * @param string $type Type de message
     * @param string $msg  Le message a enregistrer
     */
    public function write($type, $msg) {
        /** Le message est enregistré en base de données * */
        /** On récupère la date et heure courante * */
        /* @var $date DateTime */
        $date = $this->getDateTime();

        /** On utilise une requête préparée * */
        $stmt = $this->pdo->prepare("INSERT INTO " . $this->getParameter('tbl') . " (date_msg,type,msg) VALUES (:date, :type, :msg)");
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':msg', $msg);
        $stmt->execute();
    }

}
