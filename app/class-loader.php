<?php
// Load Config
require_once 'config/config.php';
require_once 'helper/msgHelper.php';

require_once 'helper/UserValidator.php';

/* Load Filter & Sanitize */
require_once 'helper/filter_sanitize.php';

// Autoload  Libraries Classes
spl_autoload_register(function ($className) {
 require_once 'libraries/' . $className . '.php';
});