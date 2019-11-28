<?php


class db
{
	private $host="localhost";
	private $username="root";
	private $password="";
	private $database="afmoodel";
	public $connection="";

	
	function __construct()
	{
 $con=mysqli_connect($this->host,$this->username,$this->password,$this->database);
 mysqli_query($con,"SET NAMES 'utf8'");
 mysqli_query($con,"SET CHARACTER SET 'utf8'");
 mysqli_query($con,"SET caracter_set connection='utf8'");



		if ($con) {
			
			$this->connection=$con;
			
			
		}
	}
}




?>