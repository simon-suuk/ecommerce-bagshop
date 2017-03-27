<!--The CSS and framework is Sourced from W3layout
A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html lang="en">
<head>
<title>Admin | List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /css files -->

<style>	
      table {
      border-collapse: collapse;
      }
      th, td {
      text-align: left;
      padding: 8px;
	  color: #fff;
	  background:#808080
      }
      
      th {
      background-color: #FE980F;
      color: white;
      }
	  button {
    background-color: blue;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="main">
        <img src="images/BagShop.png" alt="company logo" width="160px" height="130px">
        <h1>Department Store</h1>
    </div>
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="#" method="post">
			<div class="content-wthree1">
				<?php
              include_once("DatabaseHelper.php");
              $obj=new DatabaseHelper();
              $result=$obj-> selectEmp();
              
              if(!$result){
              	echo "error here, wanna fix this";
              }
              echo"<center><table><tr><th>Name</th><th>Date Hired</th><th></th><th></th><th></th><th></th></tr>";
              
              $edit="EDIT";
              $delete="DELETE";
              while($row=$obj->fetch()){  
				$uc=$row['fname'];
				$ac=$row['lname'];
				$ec=$row['zip'];
				$oc=$row['hdate'];
				$eno=$row['eno'];
              	echo"<tr>
              		<td>{$row['fname']} {$row['lname']}</td>
              		<td>{$row['hdate']}</td>
              <td><a href='empEdit.php?FIRSTNAME=$uc&LASTNAME=$ac&ZIP=$ec&DATE_HIRED=$oc&ENO=$eno'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></a><td>
              <td><a href=''><i class='fa fa-trash-o' aria-hidden='true'></i></a><td>
              	</tr>";
              }
              echo "</table></center>";
              ?>
            </div>
            <div class="content-wthree4">	
				<div class="form-control" >
                    <br>
					<button><a href="empAdd.html">New User</a></button>
					
					<div class="clear"></div>
				</div>
			</div>	
		</form>
	</div>
</div>


</body>
</html>
