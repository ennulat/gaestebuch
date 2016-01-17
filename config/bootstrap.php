<?php
/**
 * Created by PhpStorm.
 * User: Jes
 * Date: 17.01.2016
 * Time: 15:25
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

/***
 * Load third party libs:
 * HttpFoundation
 * Smarty
 */
require_once  __DIR__ . '/../vendor/autoload.php';


/***
 * DB Parameter:
 * host: localhost
 * user: root
 * password:
 * database: gaestebuch
 *
 */
define('HOST', 'localhost');
define('DB', 'gaestebuch');
define('DB-USER', 'root');
define('DB-PASS', '');