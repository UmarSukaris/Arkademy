<?php
class Salary{
	
	private $conn;
	private $table_name = "salary";
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_salary ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
}
?>