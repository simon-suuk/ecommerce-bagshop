function confirm(xhr,status){
	if(status=="success"){
	var response = xhr.responseText;
	}
	var confirm =  document.getElementById("result");
	confirm.innerText=response;
	
}

function getSelectedOption(sel) {
        var opt;
        for ( var i = 0, len = sel.options.length; i < len; i++ ) {
            opt = sel.options[i];
            if ( opt.selected === true ) {
                break;
            }
        }
        return opt;
    }

function choose(){
	
	var opt = document.getElementById('period');
	var chosen = getSelectedOption(opt);
	if(chosen.value=="day"){ displayDay();}
	if(chosen.value=="week"){displayWeek();}
	if(chosen.value=="month"){ displayMonth();}
}

function displayDay(){
	
	var url = "ajaxDisplay.php?cmd=1";
	$.ajax(url, 
	{  async:true,
		complete:confirm
	}
	);
	
	
}


function displayWeek(){
	var url = "ajaxDisplay.php?cmd=2";
	$.ajax(url, 
	{  async:true,
		complete:confirm
	}
	);
}

function displayMonth(){
	var url = "ajaxDisplay.php?cmd=3";
	
	$.ajax(url, 
	{  async:true,
		complete:confirm
	}
	);
	
	function displaylivemonth(){
		
		 $("#period").change(function () {
            var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
            alert("Selected Text: " + selectedText + " Value: " + selectedValue);
        });
		
	}
	
}