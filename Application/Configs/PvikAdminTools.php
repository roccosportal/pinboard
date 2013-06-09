<?php
self::$config['PvikAdminTools'] = array ();
self::$config['PvikAdminTools']['Url'] = '/admin/';
self::$config['PvikAdminTools']['Login']= array ();
self::$config['PvikAdminTools']['Login']['Username'] = 'Admin';
self::$config['PvikAdminTools']['Login']['PasswordMD5'] = '098f6bcd4621d373cade4e832627b4f6';
self::$config['PvikAdminTools']['FileFolders']= array ('~/files/', '~/images/');

self::$config['PvikAdminTools']['Tables'] = array (
    'Posts' => array (
            'Fields' => array (
                'name' => array ('Type' => 'Normal', 'ShowInOverview' => true),
                'text' => array ('Type' => 'Textarea', 'ShowInOverview' => false),
              ),
              'ForeignTables' => array(
                  'Comments' => array ('ForeignKey' => 'postId',  'ShowCountInOverview' => true),
                   'TagsPosts' => array ('ForeignKey' => 'postId',  'ShowCountInOverview' => true)
                )
           
    )     ,
    'Comments' => array (
            'Fields' => array (
                'name' => array ('Type' => 'Normal', 'ShowInOverview' => true),
                'text' => array ('Type' => 'Textarea', 'ShowInOverview' => false),
                'post' => array ('Type' => 'Select', 'UseField' => 'postId', 'ShowInOverview' => true)
             )
    ),
    'TagsPosts' => array (
            'Fields' => array (
                'tag' => array ('Type' => 'Select', 'UseField' => 'text', 'ShowInOverview' => true),
                  'post' => array ('Type' => 'Select', 'UseField' => 'postId', 'ShowInOverview' => true)
              ),
             
    ),     
    'Tags' => array (
            'Fields' => array (
                'text' => array ('Type' => 'Normal', 'ShowInOverview' => true)
              ),
             
    )      
);