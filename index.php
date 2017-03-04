<?php

ini_set("display_startup_errors", 1); 
ini_set("display_errors", 1); 
require("config.php");

require("classes/Bootstrap.php");
require("classes/Controller.php");
require("classes/Model.php");

require("controllers/home.php");
require("controllers/article.php");

require("models/header.php");
require("models/mainDetails.php");
require("models/home.php");
require("models/article.php");
require("models/common.php");

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}