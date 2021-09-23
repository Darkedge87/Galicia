<?php
    // fichier de configuration


    define ('WEB_TITLE', 'Rangement d\'image');

    define ('WEB_DIR_NAME','php_avance');
    define ('WEB_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' );

    define ('IMAGE_DIR_NAME','Carrelage');
    define ('IMAGE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.IMAGE_DIR_NAME .'/');
    define ('IMAGE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . IMAGE_DIR_NAME .'/');

    define ('AVION_DIR_NAME','Dalle');
    define ('AVION_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.AVION_DIR_NAME .'/');
    define ('AVION_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . AVION_DIR_NAME .'/');

    define ('MONTAGNE_DIR_NAME','Facade');
    define ('MONTAGNE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.MONTAGNE_DIR_NAME .'/');
    define ('MONTAGNE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . MONTAGNE_DIR_NAME .'/');

    define ('VOITURE_DIR_NAME','GrosOeuvre');
    define ('VOITURE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.VOITURE_DIR_NAME .'/');
    define ('VOITURE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . VOITURE_DIR_NAME .'/');

    define ('VOITURE_DIR_NAME','Peinture');
    define ('VOITURE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.VOITURE_DIR_NAME .'/');
    define ('VOITURE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . VOITURE_DIR_NAME .'/');

    define ('VOITURE_DIR_NAME','Toiture');
    define ('VOITURE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.VOITURE_DIR_NAME .'/');
    define ('VOITURE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . VOITURE_DIR_NAME .'/');

?>