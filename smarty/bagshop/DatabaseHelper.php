<?php

/**
*/
require_once("adb.php");

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

	function custLogin($username, $password) {
		$str_query = "select cno, firstname, lastname, street, zip, phone, username, password from customers
			WHERE username='$username' and password='$password'";
		return $this->query($str_query);
	}
	
	function getEmployee($id) {
		$strQuery="select * from employees where eno ='$id'";
		return $this->query($strQuery);
	}
	
	function getPart($id) {
		$strQuery="select * from parts where pno ='$id'";
		return $this->query($strQuery);
	}

	/**
	*Searches  
	*
	*/
	function search($name){
			$strQuery="select pname, price, qno, bno from parts where pname like '%$name%' or price like '%$name%' or qno like '%$name%' or bno like '%$name%' ";
			return $this-> query($strQuery);
		/*}
		elseif ($table=='customers') {
			$strQuery="select cname, phone, street, zip from customers where cname like '%$name%' or phone like '%$name%' or street like '%$name%' or zip like '%$name%'  ";
			return $this-> query($strQuery);
		}
		elseif($table=='employees') {
			$strQuery="select ename, zip from employees where ename like '%$name%' or zip like '%$name%' ";
			return $this-> query($strQuery);
		}*/
	}
	
	//for customers
	function addCustomer($name,$street,$zip,$phone){
		echo"insert into customers(cname,street,zip,phone) values('$name','$street',$zip,'$phone')";
		$this->query("insert into customers(cname,street,zip,phone) values('$name','$street',$zip,'$phone');");
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

	function selectCust(){
		$strQuery="select fname, lname, street, phone from customers";
		return $this->query($strQuery);
	}
	
	function getAllCustomers(){
		$strQuery="SELECT cno, firstname, lastname, street, zip, phone, username, password FROM customers";
		return $this-> query($strQuery);
	}
	
	/*this is the employee section*/
	function selectEmp(){
		$strQuery="select eno, fname, lname, zip, hdate from employees";
		return $this->query($strQuery);
	}
	
	function empLogin($username,$pword){
		$strQuery="select username, pword, id from employees where username like '$username' and pword like '$pword'";
		echo $strQuery;
		return $this->query($strQuery);
	}
	
	function selZip($city){
		$strQuery="select zip from zipcodes where city like'$city'";
		return $this->query($strQuery);
	}
	
	//for employees
	function addEmp($fname,$lname,$city,$job,$hdate, $username,$pword){	
	$this->query("insert into employees(fname,lname, zip,hdate,username,pword,id) values('$fname','$lname',$city,'$hdate','$username','pword',$job);");
	}

	function editEmployee($eno,$fname,$lname,$zip,$hdate, $username, $pword){
	$strQuery="UPDATE employees SET fname='$fname', lname='$lname',zip=$zip,hdate=$hdate,username='$username',pword=md5('$pword') WHERE eno=$eno";
	return $this->query($strQuery);
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

	//for parts
	function addPart($name,$qoh,$price,$olevel){
		echo "insert into parts(pname,qoh,price,olevel)values('$name',$qoh,$price,$olevel)";
		$this->query("insert into parts(pname,qoh,price,olevel)values('$name',$qoh,$price,$olevel)");
        	echo "Part '$name' was created";
	}

	function editPart($id, $column,$value){
		
	}

	function deletePart($id){
		
	}

	//for order details
	 function addOrderDetails($partid,$orderid,$qty){
         $this->query("insert into odetails(ono,pno,qty) values($partid,$orderid,$qty)");		 
		 
	 }
	 //search zip
	 function searchZip(){
		return $this->query("select * from zipcodes");
		 
	 }
	 // for fetching zip
	 
	 function fetchZip(){
		 $res = $this->fetch();
		 return $res;
		
	 }

	 function getAllParts(){
		$strQuery="SELECT pno, pname, qno, price, bno, olevel FROM parts";
		return $this-> query($strQuery);
	}
	
	function graph(){
		$strQuery="select bags.types as categories, count(parts.pname) as Collections from parts,bags where parts.bno=bags.bno  group by bags.types";
		return $this->query($strQuery);
	}
	
	//for statistics
	function getDetailsByDay(){
		 $todaydate = date('d',time());
		// echo "select count(ono) from orders where DAY(shipped)=$todaydate ";
		 return $this->query("select count(ono) AS result from orders where DAY(shipped)=$todaydate");
		 
	}
	
	function fetchDetailsByDay(){
		$array = array();
		$res = $this->fetch();		
		while($res != null ){
		array_push($array,$res);
		$res =$this->fetch();
		}
		// print_r($array);
		echo"Number of orders:";
		echo $array['0']['result'];
	}
		  
	function getDetailsByWeek(){
		$day = date('w');
		$today= date('Y-m-d');
		$week_start = date('Y-m-d', strtotime('-'.$day.' days'));
		    
		//echo "select count(ono) AS result from orders where shipped between '$week_start'  and '$today' ";
		 return $this->query("select count(ono) AS result from orders where shipped between '$week_start'  and '$today' ");
		 
	}
	 
	function fetchDetailsByWeek(){
		$array = array();
		$res = $this->fetch();		
		while($res != null ){
		array_push($array,$res);
		$res =$this->fetch();
		}
		// print_r($array);
		echo"Number of orders: ";
		 echo $array['0']['result'];
	}
		  
	function getDetailsByMonth(){
		$todaydate = date('m',time());
		// echo "select count(ono) from orders where MONTH(shipped)=$todaydate ";
		 return $this->query("select count(ono) AS result from orders where MONTH(shipped)=$todaydate ");
		 
	}
	
	function fetchDetailsByMonth(){
		$array = array();
		$res = $this->fetch();		
		while($res != null ){
		array_push($array,$res);
		$res =$this->fetch();
		}
		// print_r($array);
		echo"Number of orders: ";
		 echo $array['0']['result'];
	}
		function insertSession($ip,$value,$visitorid){
			$sql ="insert into sessions set ip ='$ip', datespan='$value',visitorid='$visitorid' ";
			//echo $sql;
			return $this->query($sql);		
		}
          
		function checkSessionDate($ip){
			$sql ="select date_format(max(datespan), '%Y-%m-%d %H:%i') as date from sessions where ip='$ip'";
			//echo $sql;
		 $this->query($sql);
		 return $this->fetchSessionDate();
		 
		}
		 
		 function checkExistence(){
			 $sql ="select count(*) AS count from sessions";
			//echo $sql;
			return $this->query($sql);
			 }
			 function fetchExistence(){
				 $result = $this->fetch();
				 $row = $result['count'];
				 return $row;
				 //return $this->fetch();
				 
			 }
	    function fetchSessionDate(){
			return $this->fetch();
		}
		
		function checkip($ip){
			$sql ="select count(*) AS count from sessions where ip='$ip'";
			return $this->query($sql);
			
			
		}
		function fetchip(){
			$result = $this->fetch();
				 $row = $result['count'];
				 return $row;
			
		}
		
		function checkVisitsToday($date){
			$sql = "select count(distinct ip) as visit from sessions where datespan='$date' ";
			//echo $sql;
			$this->query($sql);
			return $this->fetchVisitsToday();
		}
		 function fetchVisitsToday(){
	        $result = $this->fetch();
			$row = $result['visit'];
	      return  $row;
}
   function insertVisit($sessionid,$date){
	   $sql = "insert into visits set sessionid = '$sessionid' ,time_accessed='$date'";
	 //  echo $sql;
	    return  $this->query($sql);
	   
   }
   
   function retrieveVisits(){
	   $sql = "select count(sessionid) as visits,time_accessed from visits where time_accessed group by time_accessed";
	  // echo $sql;
	  return $this->query($sql);
	   
   }
   
   function fetchVisits(){
	   $result =$this->fetch();
	   if($result){
		return $result;   
	   }else{
		   return false;
	   }   
   }
    
    function showOrder(){
        $sql="select employees.fname, employees.lname, customers.firstname, customers.lastname, orders.received, orders.shipped 
from employees, customers, orders where orders.eno=employees.eno and orders.cno=customers.cno";
        return $this->query($sql);
    }
}

?>