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
<title>Admin | Ordering List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="../css/style.css" rel='stylesheet' type='text/css' media="all" />
<link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
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
/*    background-color: blue;*/
    border: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="row">
        <div class="col-sm-4">
            <div class="logo pull-left">
                <a href="index.php"><img src="../images/home/BagShop.png" alt="" width="130" height="75" /></a>
            </div>
        </div>
        <div class="col-sm-8">
            <!--div class="pull-right"-->
                <h1 style="font-size:50px;">Department Store</h1>
            <!--/div-->
        </div>
		
    </div>
	<ul>
  <li><a href="orderList.php">Customer Orders</a></li>
  <li><a href="orders.php" >Orders Report</a></li>
</ul>
<div class="content-w3ls">
	<div class="form-w3ls">
		<form action="#" method="post">
			<div class="content-wthree1">
				<?php
              include_once("../DatabaseHelper.php");
              $obj=new DatabaseHelper();
              $result=$obj-> showOrder();
              
              if(!$result){
              	echo "error here, wanna fix this";
              }
              echo"<center><table><tr><th>Employee</th><th>Customers</th><th>Day of Receipt</th><th>Shipping date</th><th></th><th></th></tr>";

              while($row=$obj->fetch()){ 
				
				$fn=$row['fname'];
				$ln=$row['lname'];
				$fr=$row['firstname'];
				$ls=$row['lastname'];
				$rd=$row['received'];
				$sh=$row['shipped'];

              	echo"<tr>
              		<td>{$row['fname']} {$row['lname']}</td>
              		<td>{$row['firstname']} {$row['lastname']}</td>
                    <td>{$row['received']}</td>
                    <td>{$row['shipped']}</td>
                    <td><i class='fa fa-pencil-square-o' aria-hidden='true'></i><td>
              	</tr>";
              }
              echo "</table></center>";
              ?>
            </div>
		</form>
	</div>
</div>
<!--a href='orderEdit.php?FNAME=$fn&LNAME=$ln&FIRSTNAME=$fr&LASTNAME=$ls&RECEIVED=rd&SHIPPED=sh'-->

</body>
</html>
