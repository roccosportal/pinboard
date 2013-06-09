<?php

    error_reporting(E_ALL ^ E_NOTICE);
    
    // set up path mapper
    require './Library/Pvik/Core/Path.php';
    \Pvik\Core\Path::init();
    
    // set up class loader
    require \Pvik\Core\Path::realPath('~/Library/Pvik/Core/ClassLoader.php');
    $classLoader = new \Pvik\Core\ClassLoader();
    $classLoader->setNamespaceAssociation('\\Pvik', '~/Library/Pvik/');
    $classLoader->setNamespaceAssociation('\\Pinboard', '~/Application/');
    $classLoader->setNamespaceAssociation('\\PvikAdminTools', '~/Library/PvikAdminTools');
    $classLoader->init();
    
    //require_once ("./library/pvik/core/core.php");
    $core = new \Pvik\Core\Core();
    $core->loadConfig(array(
			'~/Application/Configs/DefaultConfig.php',
			'~/Application/Configs/Config.php',
                        '~/Application/Configs/PvikAdminTools.php',
                        '~/Library/PvikAdminTools/Configs/Configure.php')
			);
    $core->startWeb();
