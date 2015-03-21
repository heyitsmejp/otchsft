<?php
require("config.php");
require($external_dir . "dbconfig.php");
$myconnection = new PDO(constant("DSN"), constant("USERNAME"), constant("PASSWD"));




