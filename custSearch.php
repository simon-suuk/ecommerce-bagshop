<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>CSS3 + jQuery Search Form</title>

	<!-- CSS -->
	<link rel="stylesheet" href="style.css" type="text/css" />

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700' rel='stylesheet' type='text/css'>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>

	<!-- jQuery Easing -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

	<!-- Functions -->
	<script type="text/javascript" src="js/functions.js"></script>
	
	<script>
      function showResult(str) {
        if (str.length==0) { 
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        } else {  // code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
          }
        }
        xmlhttp.open("GET","searchAjax.php?q="+str,true);
        xmlhttp.send();
      }
    </script>

	</head>

	<body>
		<div id="search-form">
			<form class="form-container">
				<input type="text" class="search-field" value="Type search text here..." onkeyup="showResult(this.value)">
				<div id="livesearch"></div>
				<!--div class="submit-container">
					<input class="submit" />
				</div-->
			</form>
			<?php
                  include_once("DatabaseHelper.php");
                  $obj=new DatabaseHelper();
                  if (isset($_REQUEST['search'])) {
                      $parts='customers';
                      $name=$_REQUEST['search'];
                      $result=$obj->search($name, $parts);
                  }
                  
                  ?>
			<div class="popup">
				<p>Please fill out this field.</p>
			</div>
		</div>
		
	</body>
</html>
