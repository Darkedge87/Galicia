<?php
    require_once ('../../models/Realisation.php');

class RealisationManager {

    public function __construct() {

    }
    
    public function getAllRealisation() {
        $q = Db::getInstance()->query('SELECT * FROM realisation ');

        $donnees = $q->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($donnees as $donnee) {
            $result[] = Realisation::fromArray($donnee);
        }
        return $result;
        
    }

    public function getRealisation($id) {
        $q = Db::getInstance()->query('SELECT * FROM realisation WHERE id = "'.$id.'"');
        $donnees = $q->fetchAll(PDO::FETCH_ASSOC);

        $result = [];
        foreach ($donnees as $donnee) {
            $result[] = Realisation::fromArray($donnee);
        }
        return $result;
    }

}

?>