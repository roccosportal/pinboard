<?php

self::$config['Translations']['Navigation'] = array();
self::$config['Translations']['Navigation']['Pinboard'] = 'Pinboard';
self::$config['Translations']['Navigation']['Home'] = 'Home';
self::$config['Translations']['Navigation']['CreatePost'] = 'Create Post';
self::$config['Translations']['Navigation']['Search'] = 'Search';

self::$config['Translations']['Footer'] = array();
self::$config['Translations']['Footer']['SourceCode'] = 'You can find the source code at <a href="https://github.com/roccosportal/pinboard/">Github</a>. This is version ' . self::$config['Version'] .'</a>.';

self::$config['Translations']['Index'] = array();
self::$config['Translations']['Index']['Welcome'] = 'Welcome';
self::$config['Translations']['Index']['WelcomeText'] = 'Here you have list of the latest posts. You can <a href="' . Pvik\Core\Path::relativePath('~/new/') . '">create a post</a> by yourself.';
self::$config['Translations']['Index']['Next'] = 'Next';
self::$config['Translations']['Index']['Prev'] = 'Prev';

self::$config['Translations']['NewPost'] = array();
self::$config['Translations']['NewPost']['NewPost'] = 'Create a new post';
self::$config['Translations']['NewPost']['Required'] = '(required)';
self::$config['Translations']['NewPost']['NotRequired'] = '(NOT required)';
self::$config['Translations']['NewPost']['Name'] = 'Name';
self::$config['Translations']['NewPost']['NamePlaceholder'] = 'Your name...';
self::$config['Translations']['NewPost']['Text'] = 'Text';
self::$config['Translations']['NewPost']['TextPlaceholder'] = 'Your text...';
self::$config['Translations']['NewPost']['Email'] = 'Email';
self::$config['Translations']['NewPost']['EmailPlaceholder'] = 'Your email adress...';
self::$config['Translations']['NewPost']['EmailHelp'] = 'Fill in for automatical notification.';
self::$config['Translations']['NewPost']['Tags'] = 'Tags';
self::$config['Translations']['NewPost']['TagsPlaceholder'] = 'Tags';
self::$config['Translations']['NewPost']['TagsHelp'] = 'Comma seperated list: Music, Rock, Punk';
self::$config['Translations']['NewPost']['Submit'] = 'Submit';
self::$config['Translations']['NewPost']['ErrorFieldEmpty'] = 'Field can not be empty.';
self::$config['Translations']['NewPost']['ErrorFieldTooShort'] = 'Field too short.';
self::$config['Translations']['NewPost']['Info'] = 'Info';
self::$config['Translations']['NewPost']['InfoText'] = 'Here you can create a new post. Just leave a name and a text here. An email address is not required but you will get notifications when somebody adds a comment. You should add tags to your post, so people can find interests better.';
self::$config['Translations']['NewPost']['GoBack'] = 'If you\'re wrong here then <a href="' . \Pvik\Core\Path::relativePath('~/') .'">go back to the home page</a>.';

self::$config['Translations']['PostList'] = array();
self::$config['Translations']['PostList']['NoPosts'] = 'No posts found';
self::$config['Translations']['PostList']['Details'] = 'Details';

self::$config['Translations']['TopTags'] = array();
self::$config['Translations']['TopTags']['CommonTags'] = 'Common Tags';

self::$config['Translations']['PostDetails'] = array();
self::$config['Translations']['PostDetails']['NewComment'] = 'Create a new comment';
self::$config['Translations']['PostDetails']['Required'] = '(required)';
self::$config['Translations']['PostDetails']['NotRequired'] = '(NOT required)';
self::$config['Translations']['PostDetails']['Name'] = 'Name';
self::$config['Translations']['PostDetails']['NamePlaceholder'] = 'Your name...';
self::$config['Translations']['PostDetails']['Text'] = 'Text';
self::$config['Translations']['PostDetails']['TextPlaceholder'] = 'Your text...';
self::$config['Translations']['PostDetails']['Email'] = 'Email';
self::$config['Translations']['PostDetails']['EmailPlaceholder'] = 'Your email adress...';
self::$config['Translations']['PostDetails']['EmailHelp'] = 'Fill in for automatical notification.';
self::$config['Translations']['PostDetails']['Submit'] = 'Submit';
self::$config['Translations']['PostDetails']['ErrorFieldEmpty'] = 'Field can not be empty.';
self::$config['Translations']['PostDetails']['ErrorFieldTooShort'] = 'Field too short.';
self::$config['Translations']['PostDetails']['Info'] = 'Info';
self::$config['Translations']['PostDetails']['GoBack'] = 'If you\'re wrong here then <a href="' . \Pvik\Core\Path::relativePath('~/') .'">go back to the home page</a>.';

self::$config['Translations']['Search'] = array();
self::$config['Translations']['Search']['Search'] = 'Search through posts';
self::$config['Translations']['Search']['Text'] = 'Text';
self::$config['Translations']['Search']['TextPlaceholder'] = 'search in text';
self::$config['Translations']['Search']['Name'] = 'Name';
self::$config['Translations']['Search']['NamePlaceholder'] = 'search in name';
self::$config['Translations']['Search']['Tags'] = 'Tags';
self::$config['Translations']['Search']['TagsPlaceholder'] = 'search in tags';
self::$config['Translations']['Search']['TagsHelp'] = 'Comma seperated list: Music, Rock, Punk';
self::$config['Translations']['Search']['Submit'] = 'Search';

