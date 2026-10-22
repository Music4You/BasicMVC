<?php
/*
 ==========================
	Basic Controler 
	handle Tempate Logic
 ==========================
*/
class Controller {	
	/*
	 * static array $dataView
	 * stores data for the Views
	 */
	public static $dataView = array();
	
	/*
	 * static $templatePath
	 * stores viewpath for including in the maintemplate
	 */
	public static $templatePath;
	
	/*
	 * setViewData
	 * addiing data for views in $dataView array -> datakey and value
	 */
	protected function setViewData(string $dataName, $dataSet) :void {
		self::$dataView[$dataName] = $dataSet;		
	}
	
	/*
	 * render
	 * params: called controller, called method, error
	 * setting up the maintemplate + store templatePath for requested view
	 * when error true = exception from ErrorHandler Class
	 */
	public function render(string $controllerView, string $methodView, bool $errorState=false) :void{

		if($errorState){
			require_once(appPath."/view/includes/errorException.phtml");
			die;
		}
		self::$templatePath = appPath."/view/".$controllerView."/".$methodView.".phtml";
		require_once(appPath."/view/includes/mainTemplate.phtml");
	}
}