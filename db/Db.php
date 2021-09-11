<?php 
    class Db extends PDO {
        private function __construct() {
            try {
                parent::__construct('mysql:host=' . 'localhost' . ';dbname=' . 'galicia', 'root', '');
                
                parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, );
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }

        public static function getInstance() {
            static $instance = false;
            if (!$instance) {
                $instance = new self;
            }
            return $instance;
        }
    }

?> 