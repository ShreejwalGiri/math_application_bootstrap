<?php

	// geometric problems

	include ('php/geometric_bll.php');

	if ($_GET['page'] === 'triangle')
	{
		$data = new geometric_bll();
		$data -> triangle () ;
	}
	if ($_GET['page'] === 'circle')
	{
		$data = new geometric_bll();
		$data -> circle () ;
	}

	// vector problems

	include ('php/vector_bll.php') ;


	if($_GET['page'] === 'dot_product')
	{
		$data = new vector () ;
		$data -> dot_product() ;

	}

	if($_GET['page'] === 'sum_sub_mult')
	{
		$data = new vector () ;
		$data -> sum_sub_mult() ;
	}
	if($_GET['page'] === 'scaler_product')
	{
		$data = new vector () ;
		$data -> scaler_product() ;

	}

	// algebra problem

	include ("php/algebra.php");
	if ($_GET['page'] === 'lenear_equetion')
	{
		$data = new algebra() ;
		$data -> lenear_equetion() ;
	}
	if ($_GET['page'] === 'lenear_equetion_three' )
	{
		$data = new algebra() ;
		$data -> lenear_equetion_3v() ;
	}
	if($_GET['page'] === 'quardratic_equetion' )
	{
		$data  = new algebra() ;
		$data -> quardratic_equetion();
	}

	// matrix problem

	include ("php/matrix_bll.php") ;

	if($_GET['page'] === "matrix")
	{
		$data = new matrix() ;
		$data -> cal() ;
	}
	if($_GET['page'] === "matrix_transpose")
	{
		$data = new matrix() ;
		$data -> matrix_transpose() ;
	}

	if($_GET['page'] === "matrix_inverse")
	{
		$data = new matrix() ;
		$data -> matrix_inverse() ;
	}

	if ($_GET['page'] === "matrix_identical")
	{
		$data = new matrix() ;
		$data -> matrix_identical() ; 
	}

	else
	{
		die ('no data found ') ;
	}

?>
