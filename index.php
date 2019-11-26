<?php
require_once 'app/config/config.php';
require 'system/Dispatcher.php';

require 'system/Autoload.php';


new System\Core\Autoload();

new System\Core\Dispatcher();