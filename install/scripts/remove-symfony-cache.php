<?php

$isCliReqs = php_sapi_name() == 'cli' ? true : false;
//third party Symfony
$thirdPartyFolder = !$isCliReqs ? $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'thirdparty/Symfony' : 'thirdparty/Symfony';

if (is_dir($thirdPartyFolder)) {
    $varPath = $thirdPartyFolder.'/var';
    deleteDir($varPath);
}

function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        return;
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}