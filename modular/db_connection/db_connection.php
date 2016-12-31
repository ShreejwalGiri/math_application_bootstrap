<?php 

class db_connection 
{
	function __construct()
	{
		$database = "math_solution" ;
		$con = mysql_connect("localhost","root","",$database) or die ("database cannot be connected !! ") ; 
		mysql_select_db($database,$con) or die ("connection cannot be found ") ; 
		// $con = mysqli_connect("localhost","root","",$database); 
	}
}
	
?>