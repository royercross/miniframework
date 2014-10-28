<?php 

require "../config.php";

require ROOT."/helpers.php";
require ROOT."/framework/mysqlpdo.php";
require ROOT."/framework/Request.php";

$request = new Request($_GET['url']);
$request->execute();