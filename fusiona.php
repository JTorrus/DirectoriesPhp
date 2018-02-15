<?php
include("fusio_directoris.inc");
include("constants.inc");

$inputMergedDir = DIRECTORI_BASE . "/" . $_POST["dirfusionat"];

if (file_exists($inputMergedDir)) {
    esborra_directori($inputMergedDir);
    mergeDirs();
} else {
    mergeDirs();
}

function mergeDirs()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstDir = DIRECTORI_BASE . "/" . $_POST["dir1"];
        $secondDir = DIRECTORI_BASE . "/" . $_POST["dir2"];
        $inputMergedDir = DIRECTORI_BASE . "/" . $_POST["dirfusionat"];

        if (file_exists($firstDir) && file_exists($secondDir)) {
            $filesFirstDir = llistat_fitxers($firstDir);
            $filesSecondDir = llistat_fitxers($secondDir);

            $concatSecondDir = $_POST["dir2"];

            if ($inputMergedDir) {
                foreach ($filesFirstDir as $item) {
                    $source = $firstDir . "/" . $item;
                    $dest = $inputMergedDir . "/" . $item;

                    copy($source, $dest);
                }

                foreach ($filesSecondDir as $item) {
                    $source = $secondDir . "/" . $item;
                    $dest = $inputMergedDir . "/" . $item;

                    if (conte_fitxer($dest, $inputMergedDir)) {
                        $dest = $inputMergedDir . "/" . $item . "_" . $concatSecondDir;
                    }

                    copy($source, $dest);
                }
            }
        }
    }
}

?>
