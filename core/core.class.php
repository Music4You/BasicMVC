<?php
/*
 ================
	Core Class 
	Main cass
 ================
*/

/*
 * loading systemclasses 
 * will be replaced soon with autoload 
 */
Core::loadClass("core","router");
Core::loadClass("core","controller");
Core::loadClass("core","database");
Core::loadClass("core","error");

class Core {
	/*
	 * static $routerObject
	 * store the routerclass object
	 */
	private static $routerObject;
	
	/*
	 * static $databaseObject
	 * store the databaseclass object
	 */
	private static $databaseObject;
	
	/*
	 * constructor called at new Core(); 
	 */
	public function __construct() {
		
	}
	
	/*
	 * static loadClass
	 * params: $type = folder, $className = name of requested class, without .class.php/.core.php etc 
	 * fast including of classes
	 */
	public static function loadClass($type, $className):void {
		
		$classPath = appPath."/".$type."/".$className.".".$type.".php";
		
		if(file_exists($classPath))
			require_once($classPath);
		else
			die($classPath." wurde nicht gefunden");
	}

	/*
	 * static getRouter
	 * returning router object
	 */
	public static function getRouter() :object {
		
		if(!is_object(self::$routerObject))
			self::$routerObject = new Router();
		return self::$routerObject;
	}
	
	/*
	 * static getDB
	 * returning database object
	 */
	public static function getDB() :object {
		
		if(!is_object(self::$databaseObject))
			self::$databaseObject = new Database();
		return self::$databaseObject;
	}
}
?>