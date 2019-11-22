<?php
require_once 'app/config/config.php';
require 'system/Autoload.php';

require 'system/Dispatcher.php';

new system\core\Autoload();

new system\core\Dispatcher();