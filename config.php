
<?php
/*
define("HOST",'localhost');
define("USER",'sakshi');
define("PASSWORD",'sakshi');
define("DATABASE",'download');
$con=mysql_connect("localhost","sakshi","sakshi") or die("could not connect".mysql_error());
$db=mysql_select_db("download",$con);

if(!$db)
{
echo" Cannot Connect";
}
 * */
$server="localhost";
$username="sakshi";
$password="sakshi";
$database_name="download";
$con=mysql_connect($server, $username, $password) or die("Error in Server connection!!");
mysql_select_db($database_name, $con) or die("Error in database connection");

?>


