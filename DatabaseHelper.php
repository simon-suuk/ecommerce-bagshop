<?php

/**
*/
include_once("adb.php");

/**
*DatabaseHelper  class
*/
class DatabaseHelper extends adb{

	/**
	*constructor
	*/
	function __construct(){
	}
	
	function dbCleanUp($table){
		$this->query("DROP TABLE IF EXISTS $table");
	} 
	
	function createTable($name, $query){
		$this->query("CREATE TABLE IF NOT EXISTS $name($query)");
	}

	/**
	*Searches  
	*
	*/
	function search($name,$table){
		if($table=='parts'){
			$strQuery="select pname, price, qno, bno from parts where pname like '%$name%' or price like '%$name%' or qno like '%$name%' or bno like '%$name%' ";
			return $this-> query($strQuery);
		}
		elseif ($table=='customers') {
			$strQuery="select cname, phone, street, zip from customers where cname like '%$name%' or phone like '%$name%' or street like '%$name%' or zip like '%$name%'  ";
			return $this-> query($strQuery);
		}
		elseif($table=='employees') {
			$strQuery="select ename, zip from employees where ename like '%$name%' or zip like '%$name%' ";
			return $this-> query($strQuery);
		}
	}
	
	//for customers
	function addCustomer($name,$street,$zip,$phone){
		query("insert into customers(cname,street,zip,phone) values('$name','$street',$zip,'$phone');");
		echo "Customer '$name' was created";
	}
	
	function editCustomer($id, $column,$value){
		$query = "update Customers set $column = '$value' where cno = $id ";
		query($query);
		echo "Customer '$value' was changed with the query $query";
	}

	function deleteCustomer($id){
		$query = "delete from Customers where cno=$id";
		query($query);
		echo "Successfull delete";
	}
	
	//for employees
	function addEmployee($name,$zip,$hdate){

	}

	function editEmployee($column,$id,$value){
	
	}

	function deleteEmployee($id){
	
	}
	
	//for Order detail
	function addDetails($onumber,$pnumber,$quantity){

	}

	function editDetails($id,$column,$value){
		
	}

	function deleteDetails($Oid,$Pid){
		
	}
	
	//for  Order
	function addOrder($cno,$eno,$received,$shipped,$pno,$qty){
		//orders table cno, eno, received, shipped
		$orderQuery="INSERT INTO orders SET
					cno = '$cno',
					eno = '$eno',
					received = '$received',
					shipped = '$shipped' ";
		$this->query($orderQuery);			
		
		$ono = mysqli_insert_id($this->db);
		//$ono = $this->insert_id;
		
		//odetails table ono, pno, qty
		$detailsQuery="INSERT INTO odetails SET
					ono = '$ono',
					pno = '$pno',
					qty = '$qty' ";
		$this->query($detailsQuery);		
		
		//parts table set qno = qno-qty
		$partsQuery = "UPDATE parts SET
						qno = qno - '$qty' 
						WHERE pno = '$pno' ";
		return $this->query($partsQuery);
	}

	function editOrder($id,$column,$value){

	}

	function deleteOrder($id){

	}
	
	//for parts
	function addPart($name,$qoh,$price,$olevel){
	
	}

	function editPart($id, $column,$value){
		
	}

	function deletePart($id){
		
	}
	
	function getAllParts(){
		$strQuery="SELECT pno, pname, qno, price, bno, olevel FROM bagshop.parts";
		return $this-> query($strQuery);
	}

}
?>