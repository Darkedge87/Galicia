<?php

    class Image {

        public function getImages($image_dir) {

            if (is_dir($image_dir)) {
            
                if ($handle = opendir($image_dir)) {                  

                    while (($entry = readdir($handle)) !== false) {
                        
                        if ($entry != "." && $entry != "..") {
                           
                            Image::getImages( $image_dir.$entry );

                            $files = $image_dir.'/'.$entry;

                            if(!is_dir($files)) {
;
                                $images = explode('/', $files, 5);      // pour récuperer les images
                                $titles = explode('/', $files, 8);      // pour récuperer les titres des dossiers
            
                                $title = $titles[6];                    // on assigne les titres des dossiers dans une variable $title
                                $image = $images[4];                    // on assigne les images dans une variable $image
                                $lists[] = $image;
                            } else {
                                
                            }
                        }
                    }

                    if(isset($title)) {

                        echo '<h3>'.$title.'</h3>';    // affiche les titres

                        foreach ($lists as $list) {
                            echo '<img src="../../'.$list.'">';     // affiche les images
                        }

                    }   
                }
                                            
                if( ! isset( $image ) ) $image = NULL;
                closedir($handle);
            }
        }

        public function upload($files)
        {
            foreach ($files['upload']['error'] as $key => $error)
            {
                $error = 0;
                if ($error == UPLOAD_ERR_OK)
                {
                    $tmp_name = $files['upload']['tmp_name'][$key];
                    $name = $files['upload']['name'][$key];
                    $explode = explode('-',$name);
                    if($explode[0] == 'Carrelage')
                    {
                        move_uploaded_file ($tmp_name, CARRELAGE_DIR_PATH . $name);
                    }
                    else if($explode[0] == 'Dalle')
                    {
                        move_uploaded_file ($tmp_name, DALLE_DIR_PATH . $name);
                    }
                    else if($explode[0] == 'Facade')
                    {
                        move_uploaded_file ($tmp_name, FACADE_DIR_PATH . $name);
                    }
                    else if($explode[0] == 'GrosOeuvre')
                    {
                        move_uploaded_file ($tmp_name, GROSOEUVRE_DIR_PATH . $name);
                    }
                    else if($explode[0] == 'Peinture')
                    {
                        move_uploaded_file ($tmp_name, PEINTURE_DIR_PATH . $name);
                    }
                    else if($explode[0] == 'Pave')
                    {
                        move_uploaded_file ($tmp_name, PAVE_DIR_PATH . $name);
                    }
                    else
                    {
                        $error++;
                    }
                }
                else
                {
                    $error++;
                }
            }
            if ($error == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>