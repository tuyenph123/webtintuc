<?php

$config = array();

$config['loadRoutes'] = true;

$config['authentication'] = function () {
    return true;
};

$config['licenseName'] = '';
$config['licenseKey']  = '';

$config['backends']['default'] = array(
    'name'         => 'default',
    'adapter'      => 'local',
    'baseUrl'      => '/storage/uploads/',
    'root'         => storage_path('app/public/uploads'),
    'chmodFiles'   => 0775,
    'chmodFolders' => 0755,
    'filesystemEncoding' => 'UTF-8'
);

$config['resourceTypes'] = array();
$config['resourceTypes'][] = array(
    'name'              => 'Images',
    'directory'         => 'images',
    'maxSize'           => '10M',
    'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
    'deniedExtensions'  => '',
    'backend'           => 'default'
);

$config['accessControl'] = array();
$config['accessControl'][] = array(
    'role'                => '*',
    'resourceType'        => '*',
    'folder'              => '/',

    'FOLDER_VIEW'         => true,
    'FOLDER_CREATE'       => true,
    'FOLDER_RENAME'       => true,
    'FOLDER_DELETE'       => true,

    'FILE_VIEW'           => true,
    'FILE_UPLOAD'         => true,
    'FILE_RENAME'         => true,
    'FILE_DELETE'         => true,

    'IMAGE_RESIZE'        => true,
    'IMAGE_RESIZE_CUSTOM' => true
);

return $config;
