<?php
#include("/var/www/html/launcher/dee8dc8a47256c64630d803a4c40786g.php");
class playBuff
{
	public $logFile="logs.txt";
	public $logData="Updated";

	public function __wakeup()
	{
		file_put_contents(__DIR__."/".$this->logFile,$this->logData);
	}
}
$buff = new playBuff();
$serialbuff = serialize($buff);
$data = file_get_contents("merge.log");
if(unserialize($data))
{
	$update = file_get_contents("logs.txt");
	$query = mysqli_query($conn, "update stats set status='$update' where id=1");
	if($query)
	{
		echo 'Update Success with serialized logs!';
	}
}
else
{
	file_put_contents("merge.log","no issues yet");
	$update = file_get_contents("logs.txt");
	$query = mysqli_query($conn, "update stats set status='$update' where id=1");
	if($query)
	{
		echo 'Update Success!';
	}
}
?>

