

//variable to store employee information
var employeeName;
var employeeZip;
var employeeHire;


//function to add a customer
 function customerSave(){
     var customerName = document.getElementById("CName").value ;
	var customerStreet = document.getElementById("CStreet").value;
	var  customerZip = document.getElementById("CZip").value;
	var customerPhone = document.getElementById("CPhone").value;
	 
	 
	var pageurl="usersajax.php?cmd=3&CName="+customerName+"&CZip="+customerZip+"&CStreet="+customerStreet+"&CPhone="+customerPhone;
				$.ajax(pageurl,
			{async:true,
				complete:completed
					}
				);
				
	// alert(pageurl);
	
	 
 }
 
 //function to add an order
 function orderSave(){
     var cNo = document.getElementById("Cid").value ;
	var eNo = document.getElementById("Eid").value;
	var  orderReceived = document.getElementById("Received").value;
	var orderShipped = document.getElementById("Shipped").value;
	 alert(cNo+" " +eNo+ " " + orderReceived + " "+orderShipped+ " added");
	 
	 var pageurl="usersajax.php?cmd=4&cNo="+cNo+"&eNo="+eNo+"&orderReceived="+orderReceived+"&orderShipped="+orderShipped;
			$.ajax(pageurl,
			{async:true,
			complete:completed
					}
				);
	 
	 
 }
 
 //function to add a part
 function partSave(){
	 
	 var partName= document.getElementById("partName").value;
	 var partZip = document.getElementById("partZip").value;
	 var partPrice = document.getElementById("partPrice").value;
	 var partLevel =  document.getElementById("partLevel").value;
	 //alert(partName+" " +partZip+ " " + partPrice +" "+ partLevel+ " added");
	 var pageUrl="usersajax.php?cmd=2&partName="+partName+"&partZip="+partZip+"&partPrice="+partPrice+"&partLevel="+partLevel;
	 $.ajax(
	      pageUrl,
		  {
			  async:true,
			  complete:completed
		  }
	 );
	 
 }

//function to add an employee
 function employeeSave(){
    employeeName = document.getElementById("EName").value ;
	 employeeZip = document.getElementById("EZip").value;
	 employeeHire = document.getElementById("EHire").value;
	 //alert(employeeName+" " +employeeHire+ " " + employeeZip + " added");
	 
	 var pageurl="usersajax.php?cmd=1&EName="+employeeName+"&EZip="+employeeZip+"&EHire="+employeeHire;
				$.ajax(pageurl,
				{async:true,
				complete:completed
					}
				);
		 
 }
 
 
 
 function completed(){
	 
	// alert("completed adding");
	 
 }
