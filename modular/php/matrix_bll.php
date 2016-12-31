<?php

	class matrix
	{
		function matrix_identical ()
		{
			$display = "" ;
			$m1 = $_POST['matrixTxt'];
			$m2 = $_POST['matrixTwoTxt'];

			// $k = count($m1);

			if (strlen($m1)>=1 || strlen($m2)>=1)
			{


				if ($m1 === $m2)
				{
					$m1p = explode(" ",$m1);
					$m2p = explode(" ",$m2);
					$ka = $m1p[0] ;
					$k = strlen($ka);

					$m1r = count($m1p);
					$m2r = count($m2p);

					if ($m1r === $m2r)
					{
						$display = "The given two matrix are identical to each other";
						$result = "It's".$k."X".$m2r."Matrix" ;
					}
					else
					{
						$display = "The Given two matrix are identical to each other" ;
					}


					// echo $v;
				// echo $k[$m1p[0]];


					// echo $m1.$m2 ;
				}
				else
				{
					$display = "<span style='color:red'>Soryy ! the value of given two matrix didn't match with each other</span>" ;
				}
			}
			else
			{
				$display = "<span style='color:red'>Please Insert a Value</span>" ;
			}


			header("Location:math_application_bootstrap/../../matrixIdentical?ans=$display&&result=$result");

// echo strlen($m1) ;
		}

		function cal()
		{
			// $cal_s = $_POST['cal_drp_select'];
			$cal_drp = $_POST['cal_drp'];
			$cal_drp_two = $_POST['cal_drp_two'];
			// $matrix_one = rtrim($_POST['matrix_one_txt']) ;
			// $matrix_second = rtrim($_POST['matrix_second_txt']) ;

			// 2*2 problem one
			$a1 = $_POST['a1'];
			$a2 = $_POST['a2'];
			$b1 = $_POST['b1'];
			$b2 = $_POST['b2'];

			// 2*2 problem second
			$a1s = $_POST['a1s'];
			$a2s = $_POST['a2s'];
			$b1s = $_POST['b1s'];
			$b2s = $_POST['b2s'];

			// 3*3 problem one
			$a13 = $_POST['a13'];
			$a23 = $_POST['a23'];
			$a33 = $_POST['a33'];
			$b13 = $_POST['b13'];
			$b23 = $_POST['b23'];
			$b33 = $_POST['b33'];
			$c13 = $_POST['c13'];
			$c23 = $_POST['c23'];
			$c33 = $_POST['c33'];

			// 3*3 problem two
			$a13s = $_POST['a13s'];
			$a23s = $_POST['a23s'];
			$a33s = $_POST['a33s'];
			$b13s = $_POST['b13s'];
			$b23s = $_POST['b23s'];
			$b33s = $_POST['b33s'];
			$c13s = $_POST['c13s'];
			$c23s = $_POST['c23s'];
			$c33s = $_POST['c33s'];

			if (isset($_POST['btn_ans']))
			{
				if($cal_drp == "+")
				{
					$ra1 = $a1 + $a1s ;
					$ra2 = $a2 + $a2s ;
					$rb1 = $b1 + $b1s ;
					$rb2 = $b2 + $b2s ;
				}
				else if($cal_drp == "-")
				{
					$ra1 = $a1 - $a1s ;
					$ra2 = $a2 - $a2s ;
					$rb1 = $b1 - $b1s ;
					$rb2 = $b2 - $b2s ;
				}
				else if($cal_drp == "*")
				{
					$ra1 = $a1 * $a1s ;
					$ra2 = $a2 * $a2s ;
					$rb1 = $b1 * $b1s ;
					$rb2 = $b2 * $b2s ;
				}

				header("Location:math_application_bootstrap/../../matrixCal?ra1=$ra1&&ra2=$ra2&&rb1=$rb1&&rb2=$rb2");
			}


			if (isset($_POST['btn_ans_two']))
			{
				if($cal_drp_two == "+")
				{
					$ra1 = $a13 + $a13s ;
					$ra2 = $a23 + $a23s ;
					$ra3 = $a33 + $a33s ;
					$rb1 = $b13 + $b13s ;
					$rb2 = $b23 + $b23s ;
					$rb3 = $b33 + $b33s ;
					$rc1 = $c13 + $c13s ;
					$rc2 = $c23 + $c23s ;
					$rc3 = $c33 + $c33s ;
				}
				else if($cal_drp_two == "-")
				{
					$ra1 = $a13 - $a13s ;
					$ra2 = $a23 - $a23s ;
					$ra3 = $a33 - $a33s ;
					$rb1 = $b13 - $b13s ;
					$rb2 = $b23 - $b23s ;
					$rb3 = $b33 - $b33s ;
					$rc1 = $c13 - $c13s ;
					$rc2 = $c23 - $c23s ;
					$rc3 = $c33 - $c33s ;
				}
				else if($cal_drp_two == "*")
				{
					$ra1 = $a13 * $a13s ;
					$ra2 = $a23 * $a23s ;
					$ra3 = $a33 * $a33s ;
					$rb1 = $b13 * $b13s ;
					$rb2 = $b23 * $b23s ;
					$rb3 = $b33 * $b33s ;
					$rc1 = $c13 * $c13s ;
					$rc2 = $c23 * $c23s ;
					$rc3 = $c33 * $c33s ;
				}

				header("Location:math_application_bootstrap/../../matrixCal?ra13=$ra1&&ra23=$ra2&&ra33=$ra3&&rb13=$rb1&&rb23=$rb2&&rb33=$rb3&&rc13=$rc1&&rc23=$rc2&&rc33=$rc3");

			}



			// if($cal_drp == "+")
			// {
			// 	$e_one = explode(" ", $matrix_one) ;
			// 	$e_two = explode(" ", $matrix_second) ;

			// 	$n_one = count($e_one) ;
			// 	$n_two = count($e_two) ;

			// 	if ($n_one === $n_two)
			// 	{
			// 		for ($i=0 ; $i<$n_one ; $i++)
			// 		{
			// 			$a_one[] = $e_one[$i] ;
			// 		}
			// 		for ($j=0 ; $j<$n_two ; $j++)
			// 		{
			// 			$a_two[] = $e_two[$j] ;
			// 		}
			// 		for ($k = 0 ; $k < count($a_one) ; $k++)
			// 		{
			// 			$total[] = $a_one[$k] + $a_two[$k];
			// 		}

			// 		$result = implode(" ", $total) ;
			// 		header("Location:math_application_bootstrap/../../matrixCal?ans=$result");
			// 	}
			// 	else
			// 	{
			// 		header("Location:math_application_bootstrap/../../matrixCal?error=data error");
			// 	}

			// }
			// else if($cal_drp == "-")
			// {
			// 	$e_one = explode(" ", $matrix_one) ;
			// 	$e_two = explode(" ", $matrix_second) ;

			// 	$n_one = count($e_one) ;
			// 	$n_two = count($e_two) ;

			// 	if ($n_one === $n_two)
			// 	{
			// 		for ($i=0 ; $i<$n_one ; $i++)
			// 		{
			// 			$a_one[] = $e_one[$i] ;
			// 		}
			// 		for ($j=0 ; $j<$n_two ; $j++)
			// 		{
			// 			$a_two[] = $e_two[$j] ;
			// 		}
			// 		for ($k = 0 ; $k < count($a_one) ; $k++)
			// 		{
			// 			$total[] = $a_one[$k] - $a_two[$k];
			// 		}
			// 		$result = implode(" ", $total) ;
			// 		header("Location:math_application_bootstrap/../../matrixCal?ans=$result");

			// 	}
			// 	else
			// 	{
			// 		header("Location:math_application_bootstrap/../../matrixCal?error=data error");
			// 	}

			// }
			// else if($cal_drp == "*")
			// {
			// 	$e_one = explode(" ", $matrix_one) ;
			// 	$e_two = explode(" ", $matrix_second) ;

			// 	$n_one = count($e_one) ;
			// 	$n_two = count($e_two) ;

			// 	if ($n_one === $n_two)
			// 	{
			// 		for ($i=0 ; $i<$n_one ; $i++)
			// 		{
			// 			$a_one[] = $e_one[$i] ;
			// 		}
			// 		for ($j=0 ; $j<$n_two ; $j++)
			// 		{
			// 			$a_two[] = $e_two[$j] ;
			// 		}
			// 		for ($k = 0 ; $k < count($a_one) ; $k++)
			// 		{
			// 			$total[] = $a_one[$k] * $a_two[$k];
			// 		}
			// 		$result = implode(" ", $total) ;
			// 		header("Location:math_application_bootstrap/../../matrixCal?ans=$result");

			// 	}
			// 	else
			// 	{
			// 		header("Location:math_application_bootstrap/../../matrixCal?error=data error");
			// 	}

			// }
			// else
			// {
			// 	header("Location:math_application_bootstrap/../../matrixCal?error_drp=data error");
			// }
		}

		function matrix_inverse ()
		{
			if (isset($_POST['btn_ans']))
			{
				$a = $_POST['a1'];
				$b = $_POST['a2'];
				$c = $_POST['b1'];
				$d = $_POST['b2'];

				$value_a = $a * $d ;
				$value_b = $c * $b ;
				$m_matrix = $value_a - $value_b ; 			// calculating the |A| for the given matrix
				$div = 1 / $m_matrix ;

				$result_a = $d * $div ;
				$result_b = - $b * $div ;
				$result_c = - $c * $div ;
				$result_d = $a * $div ;
				header("Location:math_application_bootstrap/../../matrixInverse?ansa=$result_a&&ansb=$result_b&&ansc=$result_c&&ansd=$result_d");

				//echo $m_matrix ;
			}
			else if (isset($_POST['btn_ans_two']))
			{
				// determinant of the matrix
				$a11 = $_POST['a13'];
				$a12 = $_POST['a23'];
				$a13 = $_POST['a33'];
				$a21 = $_POST['b13'];
				$a22 = $_POST['b23'];
				$a23 = $_POST['b33'];
				$a31 = $_POST['c13'];
				$a32 = $_POST['c23'];
				$a33 = $_POST['c33'];

				$p1 = $a11 * $a22 * $a33 ;
				$p2 = $a12 * $a23 * $a31 ;
				$p3 = $a13 * $a21 * $a32 ;

				$po1 = $a13 * $a22 * $a31 ;
				$po2 = $a11 * $a23 * $a32 ;
				$po3 = $a12 * $a21 * $a33 ;

				$r1 = $p1 - $po1 ;
				$r2 = $p2 - $po2 ;
				$r3 = $p3 - $po3 ;

				$determinant = $r1 + $r2 - $r3 ;

				// making inverse

				$ma = $a22 * $a33 - $a23 * $a32 ;
				$mb = $a13 * $a32 - $a12 * $a33 ;
				$mc = $a12 * $a23 - $a13 * $a22 ;

				$md = $a23 * $a31 - $a11 * $a33 ;
				$me = $a11 * $a33 - $a13 * $a31 ;
				$mf = $a13 * $a21 - $a11 * $a23 ;

				$mg = $a21 * $a32 - $a22 * $a31 ;
				$mh = $a12 * $a31 - $a11 * $a32 ;
				$mi = $a11 * $a22 - $a12 * $a21 ;

				$rd = 1 / $determinant ;

				$a = $ma * $rd ;
				$b = $ma * $rd ;
				$c = $ma * $rd ;

				$d = $ma * $rd ;
				$e = $ma * $rd ;
				$f = $ma * $rd ;

				$g = $ma * $rd ;
				$h = $ma * $rd ;
				$i = $ma * $rd ;

				header("Location:math_application_bootstrap/../../matrixInverse?sansa=$a&&sansb=$b&&sansc=$c&&sansd=$d&&sanse=$e&&sansf=$f&&sansg=$g&&sansh=$h&&sansi=$i");
			}


		}

		function matrix_transpose ()
		{

			if (isset($_POST['btn_ans']))
			{
				$a = $_POST['a1'];
				$b = $_POST['a2'];
				$c = $_POST['b1'];
				$d = $_POST['b2'];

				// transpose of the given matrix

				$result_a = $a ;
				$result_b = $c ;
				$result_c = $b ;
				$result_d = $d ;
				header("Location:math_application_bootstrap/../../matrixTranspose?ansa=$result_a&&ansb=$result_b&&ansc=$result_c&&ansd=$result_d");
			}
			if (isset($_POST['btn_ans_two']))
			{

				$a = $_POST['a13'];
				$b = $_POST['a23'];
				$c = $_POST['a33'];
				$d = $_POST['b13'];
				$e = $_POST['b23'];
				$f = $_POST['b33'];
				$g = $_POST['c13'];
				$h = $_POST['c23'];
				$i = $_POST['c33'];

				$result_a = $a ;
				$result_b = $d ;
				$result_c = $g ;
				$result_d = $b ;
				$result_e = $e ;
				$result_f = $h ;
				$result_g = $c ;
				$result_h = $f ;
				$result_i = $i ;

				header("Location:math_application_bootstrap/../../matrixTranspose?sansa=$result_a&&sansb=$result_b&&sansc=$result_c&&sansd=$result_d&&sanse=$result_e&&sansf=$result_f&&sansg=$result_g&&sansh=$result_h&&sansi=$result_i");


			}


		}
	}

?>
