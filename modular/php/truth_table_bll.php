<?php 
	
	include ('../db_connection/db_connection.php') ;
	include ("../crud_all.php");
	// include ("redirect.php");

	$database = new db_connection(); 

	

	if (isset($_POST['btn']))
	{
		$neg = $_POST['drp_n'];

		$crud = new crud_all() ; 
		$crud = $crud -> neg_ans($neg);

		while ($row = mysql_fetch_array($crud))
		{
			$ans_n = $row['Negation']; 
			Header("Location:../../truthTableInput?ans_n=$ans_n");
		}
	}
	else if (isset($_POST['btn_two']))
	{
		$p = $_POST['drp_c'];
		$q = $_POST['drp_c_two'];
		$crud = new crud_all() ; 
		$crud = $crud -> con_ans($p,$q);

		while ($row = mysql_fetch_array($crud))
		{
			$ans_c =  $row['Conjunction']; 
			Header("Location:../../truthTableInput?ans_c=$ans_c");
		}
	}
	else if (isset($_POST['btn_three']))
	{
		$p = $_POST['drp_d'];
		$q = $_POST['drp_d_two'];
		$crud = new crud_all() ; 
		$crud = $crud -> dis_ans($p,$q);

		while ($row = mysql_fetch_array($crud))
		{
			$ans_d =  $row['Disjunction']; 
			Header("Location:../../truthTableInput?ans_d=$ans_d");
		}
	}

	// Header("Location:../../truthTableInput?ans=$ans");




?>