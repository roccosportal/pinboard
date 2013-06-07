<?php

self::$config['Translations']['Navigation'] = array();
self::$config['Translations']['Navigation']['Pinboard'] = 'Pinboard';
self::$config['Translations']['Navigation']['Home'] = 'Startseite';
self::$config['Translations']['Navigation']['CreatePost'] = 'Beitrag verfassen';
self::$config['Translations']['Navigation']['Search'] = 'Suchen';

self::$config['Translations']['Footer'] = array();
self::$config['Translations']['Footer']['SourceCode'] = 'Du findest den Quellcode auf <a href="https://github.com/roccosportal/pinboard/">Github</a>. Dies ist die Version ' . self::$config['Version'] .'</a>.';

self::$config['Translations']['Index'] = array();
self::$config['Translations']['Index']['Welcome'] = 'Willkommen';
self::$config['Translations']['Index']['WelcomeText'] = 'Hier findest du eine Liste von den zuletzt verfassten Beiträgen. Du selbst kannst einen <a href="' . Pvik\Core\Path::relativePath('~/new/') . '">Beitrag verfassen</a>.';
self::$config['Translations']['Index']['Next'] = 'Vor';
self::$config['Translations']['Index']['Prev'] = 'Zurück';

self::$config['Translations']['NewPost'] = array();
self::$config['Translations']['NewPost']['NewPost'] = 'Verfasse einen neuen Beitrag';
self::$config['Translations']['NewPost']['Required'] = '(benötigt)';
self::$config['Translations']['NewPost']['NotRequired'] = '(NICHT benötigt)';
self::$config['Translations']['NewPost']['Name'] = 'Name';
self::$config['Translations']['NewPost']['NamePlaceholder'] = 'Dein Name...';
self::$config['Translations']['NewPost']['Text'] = 'Text';
self::$config['Translations']['NewPost']['TextPlaceholder'] = 'Dein Text...';
self::$config['Translations']['NewPost']['Email'] = 'Email';
self::$config['Translations']['NewPost']['EmailPlaceholder'] = 'Deine Emailadresse...';
self::$config['Translations']['NewPost']['EmailHelp'] = 'Trag deine Email ein um automatische Benachrichtigungen zu bekommen.';
self::$config['Translations']['NewPost']['Tags'] = 'Tags';
self::$config['Translations']['NewPost']['TagsPlaceholder'] = 'Tags';
self::$config['Translations']['NewPost']['TagsHelp'] = 'Komma separierte Liste: Music, Rock, Punk';
self::$config['Translations']['NewPost']['Submit'] = 'Erstellen';
self::$config['Translations']['NewPost']['ErrorFieldEmpty'] = 'Feld darf nicht leer sein.';
self::$config['Translations']['NewPost']['ErrorFieldTooShort'] = 'Feld ist zu kurz.';
self::$config['Translations']['NewPost']['Info'] = 'Info';
self::$config['Translations']['NewPost']['InfoText'] = 'Hier kannst du einen neuen Beitrag verfassen. Gib einfach deinen Namen und einen Text an. Deine Email wird nicht benötigt, aber du bekommst automatische Benachrichtigungen wenn Personen ein Kommentar hinzufügen. Füge deinem Beitrag Tags hinzu, damit Leute diese einfacher finden können.';
self::$config['Translations']['NewPost']['GoBack'] = 'Wenn du hier verkehrt bist, dann <a href="' . \Pvik\Core\Path::relativePath('~/') .'">gehe zurück auf die Startseite</a>.';

self::$config['Translations']['PostList'] = array();
self::$config['Translations']['PostList']['NoPosts'] = 'Keine Beiträge gefunden';
self::$config['Translations']['PostList']['Details'] = 'Details';

self::$config['Translations']['TopTags'] = array();
self::$config['Translations']['TopTags']['CommonTags'] = 'Häufige Tags';

self::$config['Translations']['PostDetails'] = array();
self::$config['Translations']['PostDetails']['NewComment'] = 'Erstelle ein neues Kommentar';
self::$config['Translations']['PostDetails']['Required'] = '(benötigt)';
self::$config['Translations']['PostDetails']['NotRequired'] = '(NICHT benötigt)';
self::$config['Translations']['PostDetails']['Name'] = 'Name';
self::$config['Translations']['PostDetails']['NamePlaceholder'] = 'Dein Name...';
self::$config['Translations']['PostDetails']['Text'] = 'Text';
self::$config['Translations']['PostDetails']['TextPlaceholder'] = 'Dein Text...';
self::$config['Translations']['PostDetails']['Email'] = 'Email';
self::$config['Translations']['PostDetails']['EmailPlaceholder'] = 'Deine Emailadresse...';
self::$config['Translations']['PostDetails']['EmailHelp'] = 'Trag deine Email ein um automatische Benachrichtigungen zu bekommen.';
self::$config['Translations']['PostDetails']['Submit'] = 'Erstellen';
self::$config['Translations']['PostDetails']['ErrorFieldEmpty'] = 'Feld darf nicht leer sein.';
self::$config['Translations']['PostDetails']['ErrorFieldTooShort'] = 'Feld ist zu kurz.';
self::$config['Translations']['PostDetails']['Info'] = 'Info';
self::$config['Translations']['PostDetails']['GoBack'] = 'Wenn du hier verkehrt bist, dann <a href="' . \Pvik\Core\Path::relativePath('~/') .'">gehe zurück auf die Startseite</a>.';

self::$config['Translations']['Search'] = array();
self::$config['Translations']['Search']['Search'] = 'Durchsuche Beiträge';
self::$config['Translations']['Search']['Text'] = 'Text';
self::$config['Translations']['Search']['TextPlaceholder'] = 'Suche im Text';
self::$config['Translations']['Search']['Name'] = 'Name';
self::$config['Translations']['Search']['NamePlaceholder'] = 'Suche im Namen';
self::$config['Translations']['Search']['Tags'] = 'Tags';
self::$config['Translations']['Search']['TagsPlaceholder'] = 'Suche in Tags';
self::$config['Translations']['Search']['TagsHelp'] = 'Komma separierte Liste: Music, Rock, Punk';
self::$config['Translations']['Search']['Submit'] = 'Suchen';

