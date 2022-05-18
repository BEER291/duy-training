<?php
/* 
 * Project: Nathan MVC
 * File: index.php
 * Purpose: landing page which handles all requests
 * Author: Nathan Davison
 */
//load the required classes
require("classes/basecontroller.php");  
require("classes/basemodel.php");
require("classes/view.php");
require("classes/viewmodel.php");
require("classes/loader.php");
require("classes/defines.php");
$loader = new Loader(); 
$controller = $loader->createController(); 
$controller->executeAction(); 
