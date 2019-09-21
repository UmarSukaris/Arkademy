<?php
class Work{
	
	private $conn;
	private $table_name = "work";
	
	public function __construct($db){
		$this->conn = $db;
	}

	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_work ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
}
?>