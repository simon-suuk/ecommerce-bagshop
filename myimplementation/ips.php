<?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    
	
	$result = null;
$ipSourceList = array(
'HTTP_CLIENT_IP','HTTP_X_FORWARDED_FOR',
'HTTP_X_FORWARDED', 'HTTP_FORWARDED_FOR',
'HTTP_FORWARDED', 'REMOTE_ADDR'
);
foreach($ipSourceList as $ipSource){
if ( isset($_SERVER[$ipSource]) ){
$result = $_SERVER[$ipSource];
break;
}
}
print_r($result);
return $result;

 
}





$user_ip = getUserIP();

//echo $user_ip; // Output IP address [Ex: 177.87.193.134]


?>