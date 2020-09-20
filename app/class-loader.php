<?php
// Load Config
require_once 'config/config.php';

require_once 'helper/msgHelper.php';

// Autoload  Libraries Classes
spl_autoload_register(function ($className) {
 require_once 'libraries/' . $className . '.php';
});