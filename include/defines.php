<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));   // change this path
define('HTTP_SERVER', 'http://' . $_SERVER["HTTP_HOST"] . "/");   // change this path
define('SITE_IP', $_SERVER["REMOTE_ADDR"]);
define('Fclass', ROOT . 'class');
define('FBackup', ROOT . 'backup');
define('Fadmin', ROOT . 'admin');
define('Finclude', ROOT . 'include');
define('Ffunction', ROOT . 'functions');
define('Faction', Fadmin . DS . 'action');
define('FAtemplate',   ROOT . 'template/modules');
define('FASection', ROOT . 'template/sections');
define('FAhelper', ROOT . 'helper');
define('FAUrlupload', HTTP_SERVER . 'uploads');
define('FAPathupload', ROOT . 'uploads');
define('Fjs', HTTP_SERVER . 'template/sections/js');
define('Fjquery', HTTP_SERVER . 'template/sections/jquery');
define('Fcss', HTTP_SERVER . 'template/sections/css');
define('FAajax', HTTP_SERVER . 'ajax');
define('Fimages', HTTP_SERVER . 'template/sections/img');
define('THEME_URI', HTTP_SERVER . 'template/sections/');

define('Fimage', HTTP_SERVER . 'template/default/images');

define('Ficons', HTTP_SERVER . 'template/sections/icon');
define('Fcomponent', HTTP_SERVER . 'component');
define('Qrcode', ROOT . 'phpqrcode');
define('TEMPDIR', Qrcode . '/temp/');
define( 'TEMPWEB', HTTP_SERVER.'phpqrcode/temp/');
define('FLanguage', ROOT . 'template/default/js/languages/');
?>