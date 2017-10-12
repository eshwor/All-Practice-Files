<?php

//here is way to connect database by using OOP methods
// first of all lets create class_alias

class createDatabase{
	
	public $host = "localhost";
	public $user = "root";
	public $password = "";
	public $dbname = "testdb";
	public $myConn;
	
	// lets create the server connection function 
	function connectToDatabase(){
		$con = mysqli_connect($this->host, $this->user,$this->password,$this->dbname);
		
		
		//checking connection 
		if($con){
			echo "connection successfull";
		}
		else{
			die("Failed to connection !!". mysqli_error());
		}
		
			
	}
	
		
}


?>