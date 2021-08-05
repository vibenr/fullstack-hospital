<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hospital');
require_once('functions.php');

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if (check_connection_error($conn)) { exit("CONNECTION ERROR"); }

?>