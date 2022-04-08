<?php

// Loading config
require_once 'config/config.php';

// Loading helpers
require_once 'helpers/URL_helper.php';

// Autoloader
spl_autoload_register(function ($className)
{
   require_once 'core/' . $className . '.php';
});
