<?php
require("config.php");
include_once $external_dir . dbconfig.php;
$myconnection = new PDO($dsn, $username, $passwd);



