<?php
/*
 ============================
	Router Class 
	handles mvc page logic
 ============================
*/
class Router {
	/*
	 * static $urlController
	 * store the requested controllerName
	 */
	private static $urlController;
	
	/*
	 * static $urlControllerMethod
	 * store the requested pageMethod
	 */
	private static $urlControllerMethod;
	
	/*
	 * static $urlControllerArgs
	 * store the urlAgs after /
	 */
	private static $urlControllerArgs;
	
	
	/*
	 * constructor open loading at new Router();
	 * storing the requested controller/method/args, when url is empty then standard controller = home and method = index
	 * validation
	 */
	public function __construct() {		
						
		//parse $_GET url from htaccess rewrite to an array
		//$url[0]controller
		//$url[1]method
		//$url[2]arg
		$url = $_GET['url']; 
		$url = isset($url) ? explode('/', $url) : null;
		
		self::$urlController = (!isset($url)) ? "home" : $url[0];
		self::$urlControllerMethod = (!isset($url)) ? "index" : $url[1];			
		self::$urlControllerArgs = (!isset($url)) ? "index" : (isset($url[2]) ? $url[2] : NULL);	
		
		self::validateRoute();
		
		var_dump(self::getUrlParam("test"));
	}
	
	/*
	 * static getUrlParam
	 * reuturn $_GET params from url
	 */
	public static function getUrlParam(string $param) :mixed {
		return filter_input(INPUT_GET, $param, FILTER_SANITIZE_URL);		
	}
	
	/*
	 * static validateRoute
	 * valation of requested route with routes from routeconfig file
	 * return true = exists else ErrorException 
	 */
	private static function validateRoute():bool {
		
		$validRoutes = require_once(appPath."/core/routes.php"); //import $validRoutes
		
		
		if(array_key_exists(self::$urlController,$validRoutes)) 
		{//controller exists	
			foreach($validRoutes[self::$urlController] as $method) { //loop methods
				
				if($method == self::$urlControllerMethod) {
					return true;
				}				
			}
			self::validationError();
		}
		else 
			self::validationError();
	}
	
	/*
	 * static validationError
	 * open ErrorHandler class with 404
	 */
	private static function validationError() :void {
		new ErrorHandler("404","Deine gewünschte Seite wurde nicht gefunden!");		
	}
	
	/*
	 * route
	 * final part of routing
	 * including and open requested controllers
	 * open the method function
	 */
	public function route() :void {	
		Core::loadClass("controller",self::$urlController);
		
		self::$urlController = self::$urlController . "Controller";

		$controllerMethod = self::$urlControllerMethod;
		$controllerObj = new self::$urlController();
		$controllerObj->$controllerMethod();
	}
}
?>
