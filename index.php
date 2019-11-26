<?php
require_once 'app/config/config.php';
require 'system/Autoload.php';

require 'system/Dispatcher.php';

new System\Core\Autoload();

new System\Core\Dispatcher();