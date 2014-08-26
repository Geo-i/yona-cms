<?php

$env = array(
    'production' => array(
        'database' => array(
            'host' => 'localhost',
            'username' => '',
            'password' => '',
            'dbname' => '',
            'charset' => 'utf8',
        ),
        'profiler' => false,
        'cache' => 'file',
        'metadata_cache' => 'memory',
    ),
    'development' => array(
        'database' => array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '111',
            'dbname' => 'yona-cms',
            'charset' => 'utf8',
        ),
        'profiler' => true,
        'cache' => 'file', // file, memcache
        'metadata_cache' => 'memory', // memory, apc
    ),
);

$config = array(
    'loader' => array(
        'namespaces' => array(
            'Zend' => APPLICATION_PATH . '/../vendor/zendframework/zendframework/library/Zend',
            'Application' => APPLICATION_PATH . '/modules/Application',
            'Cms' => APPLICATION_PATH . '/modules/Cms',
            'Image' => APPLICATION_PATH . '/modules/Image',
            'Index' => APPLICATION_PATH . '/modules/Index',
            'Admin' => APPLICATION_PATH . '/modules/Admin',
            'Widget' => APPLICATION_PATH . '/modules/Widget',
            'Projects' => APPLICATION_PATH . '/modules/Projects',
            'Systems' => APPLICATION_PATH . '/modules/Systems',
            'Video' => APPLICATION_PATH . '/modules/Video',
            'FileManager' => APPLICATION_PATH . '/modules/FileManager',
            'Page' => APPLICATION_PATH . '/modules/Page',
            'Publication' => APPLICATION_PATH . '/modules/Publication',
            'Seo' => APPLICATION_PATH . '/modules/Seo',
        ),
    ),
    'modules' => array(
        'index' => array(
            'className' => 'Index\Module',
            'path' => APPLICATION_PATH . '/modules/Index/Module.php'
        ),
        'admin' => array(
            'className' => 'Admin\Module',
            'path' => APPLICATION_PATH . '/modules/Admin/Module.php'
        ),
        'cms' => array(
            'className' => 'Cms\Module',
            'path' => APPLICATION_PATH . '/modules/Cms/Module.php'
        ),
        'file-manager' => array(
            'className' => 'FileManager\Module',
            'path' => APPLICATION_PATH . '/modules/FileManager/Module.php'
        ),
        'widget' => array(
            'className' => 'Widget\Module',
            'path' => APPLICATION_PATH . '/modules/Widget/Module.php'
        ),
        'projects' => array(
            'className' => 'Projects\Module',
            'path' => APPLICATION_PATH . '/modules/Projects/Module.php'
        ),
        'video' => array(
            'className' => 'Video\Module',
            'path' => APPLICATION_PATH . '/modules/Video/Module.php'
        ),
        'page' => array(
            'className' => 'Page\Module',
            'path' => APPLICATION_PATH . '/modules/Page/Module.php'
        ),
        'publication' => array(
            'className' => 'Publication\Module',
            'path' => APPLICATION_PATH . '/modules/Publication/Module.php'
        ),
        'seo' => array(
            'className' => 'Seo\Module',
            'path' => APPLICATION_PATH . '/modules/Seo/Module.php'
        ),
    ),
    'database' => $env[APPLICATION_ENV]['database'],
    'profiler' => $env[APPLICATION_ENV]['profiler'],
    'cache' => $env[APPLICATION_ENV]['cache'],
    'metadata_cache' => $env[APPLICATION_ENV]['metadata_cache'],
);

return new \Phalcon\Config($config);
