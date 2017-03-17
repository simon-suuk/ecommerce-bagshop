


<?php
if(isset($_REQUEST['cmd'])){
	
	include("../DatabaseHelper.php");
	
	$value= $_REQUEST['cmd'];
	$newdat = new DatabaseHelper();
	if($value==1){
		
		$result = $newdat->getDetailsByDay();
		$newdat->fetchDetailsByDay();
		
		//echo "day";
	}else if($value==2){
		$result = $newdat->getDetailsByWeek();
		$newdat->fetchDetailsByWeek();
		//echo "month";
	}else{
		
		$result = $newdat->getDetailsByMonth();
		$newdat->fetchDetailsByMonth();
		//echo "year";
	}
	
	
} 



?>