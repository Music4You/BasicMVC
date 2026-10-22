<?php
/*
 ====================
	Database Model 
 ====================
*/

class testdataModel {
	
	/*
	 * constructor called at new testdataModel(); 
	 */
	public function __construct() {
			
	}
	
	/*
	 * static getTestData;
	 * return data from tblTest table as object
	 */
	public static function getTestData():mixed {
		Core::getDB()->query("SELECT * FROM tblTest");
		Core::getDB()->execute();
		return Core::getDB()->resultset();
	}
}
?>