<?php

    error_reporting(E_ALL ^ E_NOTICE);
    
    // set up path mapper
    require './Library/Pvik/Core/Path.php';
    \Pvik\Core\Path::Init();
    
    // set up class loader
    require \Pvik\Core\Path::RealPath('~/Library/Pvik/Core/ClassLoader.php');
    $ClassLoader = new \Pvik\Core\ClassLoader();
    $ClassLoader->SetNamespaceAssociation('\\Pvik', '~/Library/Pvik/');
    $ClassLoader->SetNamespaceAssociation('\\Pinboard', '~/Application/');
    $ClassLoader->Init();
    
    //require_once ("./library/pvik/core/core.php");
    $Core = new \Pvik\Core\Core();
    $Core->LoadConfig(array(
			'~/Application/Configs/DefaultConfig.php',
			'~/Application/Configs/Config.php')
			);
    $Core->StartWeb();
