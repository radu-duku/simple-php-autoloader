<?php
// Uncoment of you want to see warnings and erros.
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// array that holds the folders to load from
$folders = [
    'Class', 'Views',          // it can also be only one 
];

// File extension to be loaded
$fileExtension = 'php';       // use [ * ] for all files

// array of filenames to ignore
$filesToIgnore = [
    'autoload', 'index'        // include extension, if you want specific files to be ignored
];

foreach($folders as $folder){
    $filesInFolder = glob($folder . "/*" . $fileExtension);   // read files  /  instead of [ * ] you can use for example [ en ] to import all files stating with [ en ]
    foreach($filesInFolder as $file){
                      // explode('.', explode('/', $file)[1])[0]  -> returns only the filename, no folder name and no extension
        if( !in_array( (explode('.', explode('/', $file)[1])[0]), $filesToIgnore) ){
            include_once($file);        // If $file is not in the $filesToIgnore array include/require/include_once/require_once
        }
    }
}
