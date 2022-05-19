<?php
/* Database config */
$db_host		= "localhost";
$db_user		= "root";
$db_pass		= "";
$db_database	= "dam"; 

/* End config */

if(!$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database))
{
    die("failed to connect!");
}


?>