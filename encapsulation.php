<?php

class ICT{
	private $studentId;
	private $pwd;

	public function setdetails($studentId,$pwd){
		$this->studentId = $studentId;
		$this->pwd = $pwd;
	}

	public function getdetails(){
		echo "Id is {$this->studentId} password {$this->pwd}";
	}
}

$user = new ICT();
$user->setdetails('123dimuthu','2664kdh');
$user->getdetails();

?>