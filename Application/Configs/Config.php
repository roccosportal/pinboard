<?php

self::$config['DefaultNamespace'] = '\\Pinboard';
self::$config['NamespaceAssociations']['\\Pinboard'] = '~/application/';

self::$config['Log']['On'] = true;
self::$config['Log']['UseOneFile'] = true;

self::$config['Database']['Server'] = 'localhost';
self::$config['Database']['Username'] = 'root';
self::$config['Database']['Password'] = 'root';
self::$config['Database']['Database'] = 'pinboard';

self::$config['Routes'] = array(
    array ('Url' => '/', 'Controller' => 'Index', 'Action' => 'Index'),
    array ('Url' => '/page/{page}/', 'Controller' => 'Index', 'Action' => 'Index', 'Parameters' => array ('page' => "/^\d*$/")),
    array ('Url' => '/new/', 'Controller' => 'NewPost', 'Action' => 'Index'),
    array ('Url' => '/details/{post-id}/', 'Controller' => 'PostDetails', 'Action' => 'Index'),
    array ('Url' => '/tag/{tag-name}/{tag-id}/', 'Controller' => 'Tag', 'Action' => 'Index', 'Parameters' => array ('tag-id' => "/^\d*$/"))
);


?>