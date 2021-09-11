<?php 

class User {

    private $id;
    private $name;
    private $lastname;
    private $email;

    public function __construct() {

    }

    public static function fromArray(array $donnees) {
        $user = new User();
        
        foreach ($donnees as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
        }
        // Si le setter correspondant existe.
        if (method_exists($user, $method)) {
            // On appelle le setter.
            $user->$method($value);
        }

        return $client;
    }

    public static function fromParams($id, $name, $lastname, $email) {
        $user = new Client();
        $user->id = $id;
        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;

        return $user;
    }

    // les getters

    public function getId() {
        return $this->id; 
    }

    public function getName() { 
        return $this->name;
    }

    public function getLastname() { 
        return $this->lastname;
    }

    public function getEmail() { 
        return $this->email;
    }


    ///// les setters /////

    public function setId($id) {
         $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }


    public function setEmail($email) {
        $this->email = $email;
    }
}