<?php
include 'php/dataAccess.php';

class businessLogic{

	public function getcomingshows(){
		$da = new dataAccess();
		return $da->getcomingshows();
	}
}

?>