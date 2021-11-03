<?php

require_once ('../../Db/Db.php');


class Realisation {

    private $id;
    private $name;

    public function __construct() {
        
    }

    public static function fromArray(array $donnees) {
        $realisation = new Realisation;

        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($realisation, $method)) {
                // On appelle le setter.
                $realisation->$method($value);
            }
        }
        return $realisation;

    }
    
    public static function fromParams($id, $name) {
        $realisation = new Realisation();
        $realisation->id = $id;
        $realisation->name = $name;

        return $realisation;
    }

    ///// les getters /////

    public function getId() { 
        return $this->id; 
    }

    public function getName() { 
        return $this->name;
    }


    ///// les setters /////


    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        if(is_string($name)) {
            $this->name = $name;
        }
        
    }

}

?>