<?php
/*
 =====================
	Page Controller 
 =====================
*/

/*
 * including testtata modell
 */
Core::loadClass("model","testdata");

class HomeController extends Controller {
	
	public function __construct() {
		
	}

	/*
	 * method index;
	 */
	public function index() {	
		
		$this->render("home","index");
	}
	
	/*
	 * method testdata;
	 * getting all data from testdatamodell
	 */
	public function testdata() {	
		$this->setViewData("sqlData",testdataModel::getTestData());
		
		$this->render("home","testdata");
	}
}