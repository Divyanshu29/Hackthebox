<?php
function username() { $ip = "127.0.0.1"; return "ots-" . substr(str_replace('=','',base64_encode(substr(md5($ip),0,8))),3); }
function password() { $ip = "127.0.0.1"; return substr(md5($ip),0,8); }
echo username();
//echo password();
?>
