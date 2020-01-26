<?php
$userurl=$_POST['formurl']; 
$naughtyurl=0; 
$disallowed=array('%','!','|',';','python','nc','perl','bash','&','#','{','}','[',']'); 
foreach($disallowed as $naughty){ 
	if(strpos($userurl,$naughty) !==false){ 
		echo $naughty.' is not a good thing to put in a URL'; 
		$naughtyurl=1; 
	} 
} 
if($naughtyurl==0){ 
	echo shell_exec("curl ".$userurl." 2>&1"); 
}
?> 
