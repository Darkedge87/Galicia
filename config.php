<?php
    // fichier de configuration


    define ('WEB_DIR_NAME','galicia/img');
    define ('WEB_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' );

    define ('CARRELAGE_DIR_NAME','Carrelage');
    define ('CARRELAGE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.CARRELAGE_DIR_NAME .'/');
    define ('CARRELAGE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . CARRELAGE_DIR_NAME .'/');

    define ('DALLE_DIR_NAME','Dalle');
    define ('DALLE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.DALLE_DIR_NAME .'/');
    define ('DALLE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . DALLE_DIR_NAME .'/');

    define ('FACADE_DIR_NAME','Facade');
    define ('FACADE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.FACADE_DIR_NAME .'/');
    define ('FACADE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . FACADE_DIR_NAME .'/');

    define ('GROSOEUVRE_DIR_NAME','GrosOeuvre');
    define ('GROSOEUVRE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.GROSOEUVRE_DIR_NAME .'/');
    define ('GROSOEUVRE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . GROSOEUVRE_DIR_NAME .'/');

    define ('PEINTURE_DIR_NAME','Peinture');
    define ('PEINTURE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.PEINTURE_DIR_NAME .'/');
    define ('PEINTURE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . PEINTURE_DIR_NAME .'/');

    define ('PAVE_DIR_NAME','Pave');
    define ('PAVE_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] .'/'. WEB_DIR_NAME.'/'.PAVE_DIR_NAME .'/');
    define ('PAVE_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] .'/'. WEB_DIR_NAME .'/' . PAVE_DIR_NAME .'/');

?>