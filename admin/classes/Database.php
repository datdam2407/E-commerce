<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost:8080", "root", "", "store_db");
		return $this->con;
	}
}

?>