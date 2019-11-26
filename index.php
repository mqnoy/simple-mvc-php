<?php
require_once 'App/config/config.php';
require 'System/Autoload.php';

require 'System/Dispatcher.php';

new System\Core\Autoload();

new System\Core\Dispatcher();