<?php
class User{
	
	private $conn;
	private $table_name = "name";
	
	public $n;
	public $iw;
	public $is;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values(?,?,?,'','')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->n);
		$stmt->bindParam(2, $this->iw);
		$stmt->bindParam(3, $this->is);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name;
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readKhusus(){

		$query = "select a.name as name, b.name as work, salary from name a, work b, salary c where a.id_work=b.id_work and a.id_salary=c.id_salary order by a.id_name asc";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					name = :n
				WHERE
					id_work = :iw 
				AND
					id_salary = :is";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':n', $this->n);
		$stmt->bindParam(':iw', $this->iw);
		$stmt->bindParam(':is', $this->is);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_work = ? and id_salary = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->iw);
		$stmt->bindParam(2, $this->is);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>