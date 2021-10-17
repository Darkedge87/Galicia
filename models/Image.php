<?php

    class Image
    {

        public function getImages($image_dir)
        {

            if ($handle = opendir($image_dir))
            {
                while (false !== ($entry = readdir($handle)))
                {

                    if ($entry != "." && $entry != "..")
                    {
                        $images[] = $entry;
                    }
                }
                if( ! isset( $images ) ) $images = NULL;
                closedir($handle);
                return $images; 
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