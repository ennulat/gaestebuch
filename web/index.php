<?php

require_once __DIR__.'/../config/bootstrap.php';
require_once 'frontController.php';
$frontController = new frontController();
$frontController->run();

?>
