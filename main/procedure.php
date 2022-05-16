<?php

$server= mysql_connect('localhost', 'root', '');

$db = mysql_select_db('model', $server);
$records = mysql_query( 'CALL CAL()' );

header("location: control.php");
?>