<?php

    class Image
    {

        public function getImages($image_dir) {

            if ($handle = opendir($image_dir)) {
               
                while (false !== ($entry = readdir($handle))) {

                    if ($entry != "." && $entry != "..") {
                        
                        $images[] = $entry;
                    }
                }

                if(!isset( $images ) ) $images = NULL;
                closedir($handle);
                return $images; 
            }
        }
    }

?>