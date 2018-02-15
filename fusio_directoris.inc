<?php
    function llistat_directoris($dir) {
        $arrayOfDirs = scandir($dir);

        foreach ($arrayOfDirs as $possibleDir) {
            if (is_dir($dir."/".$possibleDir)) {
                echo basename($possibleDir). '<br>';
            }
        }
    }

    function llistat_fitxers($dir) {
        $arrayOfFiles = scandir($dir);

        $arrayReturned = array();

        foreach ($arrayOfFiles as $possibleFile) {
            if (is_file($dir."/".$possibleFile)) {
                echo $possibleFile. '<br>';
                array_push($arrayReturned, $possibleFile);
            }
        }

        return $arrayReturned;
    }

    function conte_fitxer($fitxer, $dir) {
        $arrayForSearching = scandir($dir);

        foreach ($arrayForSearching as $any) {
            if (file_exists($fitxer)) {
                return true;
            }
        }
        return false;
    }

    function esborra_directori($dir) {
        $arrayForRemoving = scandir($dir);

        foreach ($arrayForRemoving as $itemToRemove) {
            if (is_file($dir."/".$itemToRemove)) {
                unlink($dir."/".$itemToRemove);
            }
        }

        if (rmdir($dir)) {
            echo 'Directori esborrat correctament'. '<br>';
        }
    }
?>
