<?php

//cargar Config
require_once 'config/config.php';
//cargar librerias

// cargar helpers
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

//auto cargar Core libraries, carga librerias "core", es lo mismo de arriba ^^
spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
});