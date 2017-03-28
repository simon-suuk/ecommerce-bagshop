


<?php
//this function displays the number of transactions according to a time frame
if(isset($_REQUEST['cmd'])){
	
	include("DatabaseHelper.php");
	
	$value= $_REQUEST['cmd'];
	$newdat = new DatabaseHelper();
	if($value==1){
		
		$result = $newdat->getDetailsByDay();
		$newdat->fetchDetailsByDay();
		
		//pecho "day";
	}else if($value==2){
		$result = $newdat->getDetailsByWeek();
		$newdat->fetchDetailsByWeek();
		//echo "week";
	}else{
		
		$result = $newdat->getDetailsByMonth();
		$newdat->fetchDetailsByMonth();
		//echo "month";
	}
	
	
} 



?>