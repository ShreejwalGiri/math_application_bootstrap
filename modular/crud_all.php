<?php 

class crud_all 
{
	// select from the truth table database 
	function negation ()
	{
		$query = "select * from negation" ;
		$result = mysql_query($query); 
		return $result ;  
	}

	function conjunction ()
	{
		$query = "select * from conjunction" ;
		$result = mysql_query($query); 
		return $result ; 
	}

	function disjunction ()
	{
		$query = "select * from disjunction" ;
		$result = mysql_query($query); 
		return $result ; 
	}

	// to produce ans 

	function neg_ans ($p)
	{
		$query = "select Negation from negation where p='$p' " ;
		$result = mysql_query($query); 
		return $result ; 
	}
	function con_ans ($p,$q)
	{
		echo $query = "select Conjunction from conjunction where p='$p' && Q = '$q' || p='$q' && Q = '$p'  " ;
		$result = mysql_query($query); 
		return $result ; 
	}
	function dis_ans ($p,$q)
	{
		echo $query = "select Disjunction from disjunction where p='$p' && Q = '$q' || p='$q' && Q = '$p' " ;
		$result = mysql_query($query); 
		return $result ; 
	}
}

	
	

?>