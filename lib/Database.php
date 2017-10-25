<?php
session_start();
$db = mysqli_connect("localhost","root","","login");
return $db;





/*class Database{

	public $host 	= "localhost";
	public $user 	= "root";
	public $pass 	= "";
	public $dbname  = "login";

	public $link;
	public $error;

	public function __construct(){
		$this->connectDB();
	}

//Create Database connection
	public function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
		if(!$this->link){
			$this->error ="Connection Failed".$this->link->connect_error;
			return false;
		}
	}

//Select/read from database
	public function select($query){
		$select = $this->link->query($query) or die($this->link->error.__LINE__);
		return $select;
	}

}*/