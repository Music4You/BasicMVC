<?php
/*
 =====================
	ErrorHandler 
	Exception Class
 =====================
*/
class ErrorHandler extends Controller {
	
	/*
	 * constructor
	 * Handling ErrorExceptions via new ErrorHander as PageController
	 * params: $errorHeader = errorcode, $errorMessage = individual message, $errorSystemMessage = systemgenerated exception message not neccessary
	*/
	public function __construct(string $errorHeader, string $errorMessage, $errorSystemMessage = NULL) {		
		self::setViewData("errorHeader",$errorHeader);
		self::setViewData("errorMessage",$errorMessage);
		self::setViewData("errorSystemMessage",$errorSystemMessage);
		$this->render("home","index", true);
		die();
	}
}
?>