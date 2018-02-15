<?php
    function llistat_directoris($dir) {
        $arrayOfDirs = scandir($dir);

        foreach ($arrayOfDirs as $possibleDir) {
            if (is_dir($possibleDir)) {
                echo $possibleDir. '<br>';
            }
        }
    }

    function llistat_fitxers($dir) {
        $arrayOfFiles = scandir($dir);

        foreach ($arrayOfFiles as $possibleFile) {
            if (is_file($possibleFile)) {
                echo $possibleFile. '<br>';
            }
        }
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
            unlink($itemToRemove);
        }

        if (rmdir($dir)) {
            echo 'Directori esborrat correctament';
        }
    }
?>
