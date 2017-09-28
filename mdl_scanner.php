<?php

function getDirContents($dir, &$results = array())
{
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

if (isset($argv[1]) && is_dir($argv[1])) {
    $dirContent = getDirContents($argv[1]);

    echo '* Model class loader By Ludovic <Silentkernel> Frank' .PHP_EOL;

    foreach ($dirContent as $oneItem) {
        if (strpos($oneItem, 'mdl_') !== false) {
            if (file_exists($oneItem)) {
                $fileName = basename($oneItem,'.php');
                $className = ucfirst($fileName);
                echo '* @property '.$className. ' $'. $fileName.PHP_EOL;
            }
        }
    }

    echo '* End of model class loader' .PHP_EOL;


} else {
    echo "Usage : php scanner_mdl.php dir_to_scan";
}