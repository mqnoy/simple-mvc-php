<?php
require_once 'app/config/config.php';
require 'system/Autoload.php';

require 'system/Route.php';

new system\core\Autoload();

new system\core\Route();