<?php
/* 											
 ==========================================================================
	Basic PHP MVC Framework V1.0
	Florian Gerhardt
	22.10.2026

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
 ==========================================================================
*/

/*
 * defines App Properties
 * appDomain is neccessary for the Routing URL logic, also localhost is working
 */
define("appPath", __DIR__);
define("appDomain", "http://basicdomain.de");
define("appName", "Basic MVC");
define("appVersion", "V1.0");

/*
 * enable PHP error reporting
 */
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/*
 * including Corefiles
 * open Core Object
 */
require_once(appPath."/core/core.class.php");
new Core();

/*
 * initialize the Routinglogic
 */
Core::getRouter()->route();
?>