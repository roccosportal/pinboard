<?php
self::$config['Log']['On'] = false;
self::$config['Log']['UseOneFile'] = true;
self::$config['UnderConstruction']['Enabled'] = false;

self::$config['ErrorPages'] = array (
    'Default' => '~/Application/Views/ErrorPages/Master.php'
);

self::$config['DefaultNamespace'] = '\\MyProject';
self::$config['DefaultNamespaceControllers'] = '\\Controllers';
self::$config['DefaultNamespaceEntity'] = '\\Model\\Entities'; 
self::$config['DefaultNamespaceModelTable'] = '\\Model\\ModelTables';
self::$config['DefaultViewsFolder'] = '~/Application/Views/';
self::$config['UnderConstruction']['Path'] = self::$config['DefaultViewsFolder'] . 'Other/UnderConstruction.php';

self::$config['Database'] = array (
    'Adapter' => 'MySQL',
    'Path' => '\Pvik\Database\Adapter\MYSQL\\'
);
?>
