<?php

self::$Config['DefaultNamespace'] = '\\Pinboard';
self::$Config['NamespaceAssociations']['\\Pinboard'] = '~/application/';

self::$Config['Log']['On'] = true;
self::$Config['Log']['UseOneFile'] = true;

self::$Config['MySQL']['Server'] = 'localhost';
self::$Config['MySQL']['Username'] = 'root';
self::$Config['MySQL']['Password'] = 'root';
self::$Config['MySQL']['Database'] = 'pinboard';

self::$Config['Routes'] = array(
    array ('Url' => '/', 'Controller' => 'Index', 'Action' => 'Index'),
    array ('Url' => '/new/', 'Controller' => 'NewPost', 'Action' => 'Index'),
    array ('Url' => '/details/{post-id}/', 'Controller' => 'PostDetails', 'Action' => 'Index')
);


?>