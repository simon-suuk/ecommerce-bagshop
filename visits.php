	<div class="footer-widget">
			<div class="container">
				<div class="row">
                 				<div class="form_layout">
				
<h1>Page visits</h1>

<div class="column" style="background-image:url('images/visits.jpg');padding:22px;height:300px;width:700px;
background-repeat: no-repeat
">   </div>

<div>
<span style="color:orange;font-size:30px">Numbers of visits today on : 

</span>
</div>
<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
//prints the number of visitors according to the time frame
if (isset($_SESSION['visits'])){
//	$dates= array();
	$today = date('d-m-y H:i');
	$previous= $_SESSION['date'];
	//echo $today. " and ".$previous;
	//when the last recorded date is the same as todays date
	if($previous ==$today){
 echo "The number of visitors is ".$_SESSION['visits'] ;  
}else{
	
	
		echo "The number of visitors is 1";
	
	
}
} else{
	echo "The number of visitors is 1 ";
	
}
?>





</div>
					
				</div>
			</div>