<?php

	class algebra
	{
		function lenear_equetion ()
		{


			// first equetion
			$x_one = $_POST["x_txt"];
			$y_one = $_POST["y_txt"];
			$a_one = $_POST["a_txt"];

			// second equetion
			$x_two = $_POST["x_txt_two"];
			$y_two = $_POST["y_txt_two"];
			$a_two = $_POST["a_txt_two"];


			$eq_one_x =  $x_two * $x_one  ;
			$eq_one_y =  $x_two * $y_one  ;
			$eq_one_a =  $x_two * $a_one  ;

			$eq_two_x =  $x_one * $x_two  ;
			$eq_two_y =  $x_one * $y_two  ;
			$eq_two_a =  $x_one * $a_two  ;

			// test start
			echo($eq_one_x)." "."x"." ".($eq_one_y)." "."y"." ".($eq_one_a)."</br>";
			echo($eq_two_x)." "."x"." ".($eq_two_y)." "."y"." ".($eq_two_a)."</br>";
			// test end


			if ($eq_one_x === $eq_two_x)
			{

					$eq_X =  $eq_one_x + -1 * $eq_two_x ;
					$eq_Y =  $eq_one_y + -1 * $eq_two_y ;
					$eq_A = $eq_one_a + -1 * $eq_two_a ;
					$A = -1 * $eq_A ;
					$YP = $A / $eq_Y ;
					$YR = round($YP,2);
					// test start
					// echo $eq_X."X"." ".$eq_Y."y"." ".$eq_A."</br>" ;
					// echo $YR."</br>" ;
					// echo $XR ;
					//test end

					// finding the value of x
					$xp = $YR * $y_one ;
					$xpa = $xp + $a_one ;
					$XRR = -1 * $xpa ;
					$XRRR = $XRR / $x_one ;
					$XR = round($XRRR,2);
				header("Location:math_application_bootstrap/../../lenearEquetion?ansy=$YR&&ansx=$XR") ;

			}
			else if ($eq_one_y === $eq_two_y)
			{
				$eq_X =  $eq_one_x + -1 * $eq_two_x ;
				$eq_Y =  $eq_one_y + -1 * $eq_two_y ;
				$eq_A = $eq_one_a + -1 * $eq_two_a ;
				$A = -1 * $eq_A ;
				if ($eq_x >= 0 )
				{
					$YP = $A / $eq_X ;
				}
				else
				{
					$YPP = -1 * $A ;
					$YP = $YPP / $eq_X ;
				}
					$XR = round($YP,2);


				// finding the value of y
				$yp = $XR * $x_one ;
				$ypa = $yp + $a_one ;
				$YRR = -1 * $ypa ;
				if ($y_one >= 0)
				{
					$YRRR = $YRR / $y_one ;
				}
				else
				{
					$YRRRR = -1 * $YRR ;
					$YRRR = $YRRRR / $y_one ;
				}

				$YR = round($YRRR,2);

					header("Location:math_application_bootstrap/../../lenearEquetion?ansy=$YR&&ansx=$XR") ;
			}

			else
			{
				echo "Sorry calculation error ! " ;
			}


		}

		function lenear_equetion_3v()
		{
			$eqAyr = "No value to dispaly" ;
			$eqAzr = "No value to dispaly" ;
			$eqAar = "No value to dispaly" ;

			// first equetion
			$x_one = $_POST["x_txt"];
			$y_one = $_POST["y_txt"];
			$z_one = $_POST["z_txt"];
			$a_one = $_POST["a_txt"];


			// second equetion
			$x_two = $_POST["x_txt_two"];
			$y_two = $_POST["y_txt_two"];
			$z_two = $_POST["z_txt_two"];
			$a_two = $_POST["a_txt_two"];

			//third equetion
			$x_three = $_POST["x_txt_three"];
			$y_three = $_POST["y_txt_three"];
			$z_three = $_POST["z_txt_three"];
			$a_three = $_POST["a_txt_three"];

			// multiplying eq one and two
			$eq_one_x = $x_two * $x_one ;
			$eq_one_y = $x_two * $y_one ;
			$eq_one_z = $x_two * $z_one ;
			$eq_one_a = $x_two * $a_one ;

			$eq_two_x = $x_one * $x_two ;
			$eq_two_y = $x_one * $y_two ;
			$eq_two_z = $x_one * $z_two ;
			$eq_two_a = $x_one * $a_two ;

			// test start
			 	echo $eq_one_x."x"." ".$eq_one_y."y"." ".$eq_one_z."z"." ".$eq_one_a."</br>" ;
				echo $eq_two_x."x"." ".$eq_two_y."y"." ".$eq_two_z."z"." ".$eq_two_a."</br>" ;
			// test end

			if ($eq_one_x === $eq_two_x)
			{
				// $eqAx = -1 * $eq_two_x ;
				$eqAy = -1 * $eq_two_y ;
				$eqAz = -1 * $eq_two_z ;
				$eqAa = -1 * $eq_two_a ;

				// $eqAxr = $eqAx + $eq_one_x ;
				$eqAyr = $eqAy + $eq_one_y ;
				$eqAzr = $eqAz + $eq_one_z ;
				$eqAar = $eqAa + $eq_one_a ;
				echo "eq A = ".$eqAyr."y"." ".$eqAzr."z"." ".$eqAar."</br>" ;

			}
			else
			{
				echo "calculation error ! for eq A , X value didn't get elemenated" ;
			}

			$eq_three_x = $x_three * $x_two ;
			$eq_three_y = $x_three * $y_two ;
			$eq_three_z = $x_three * $z_two ;
			$eq_three_a = $x_three * $a_two ;

			$eq_four_x = $x_two * $x_three ;
			$eq_four_y = $x_two * $y_three ;
			$eq_four_z = $x_two * $z_three ;
			$eq_four_a = $x_two * $a_three ;
			// test start
				echo $eq_three_x."x"." ".$eq_three_y."y"." ".$eq_three_z."z"." ".$eq_three_a."</br>" ;
				echo $eq_four_x."x"." ".$eq_four_y."y"." ".$eq_four_z."z"." ".$eq_four_a."</br>" ;
			// test end
			if ($eq_three_x === $eq_four_x)
			{
				// $eqBx =  -1 * $eq_four_x ;
				$eqBy =  -1 * $eq_four_y ;
				$eqBz =  -1 * $eq_four_z ;
				$eqBa =  -1 * $eq_four_a ;

				// $eqBxr = $eqBx + $eq_three_x ;
				$eqByr = $eqBy + $eq_three_y ;
				$eqBzr = $eqBz + $eq_three_z ;
				$eqBar = $eqBa + $eq_three_a ;

				echo "eq B = ".$eqByr."y"." ".$eqBzr."z"." ".$eqBar."</br>" ;
			}
			else
			{
				echo "calculation error ! B value didn't get elemenated" ;
			}
			$eq_five_y = $eqByr * $eqAyr ;
			$eq_five_z = $eqByr * $eqAzr ;
			$eq_five_a = $eqByr * $eqAar ;

			$eq_six_y = $eqAyr * $eqByr ;
			$eq_six_z = $eqAyr * $eqBzr ;
			$eq_six_a = $eqAyr * $eqBar ;

			echo $eq_five_y."y"." ".$eq_five_z."z"." ".$eq_five_a."</br>"  ;
			echo $eq_six_y."y"." ".$eq_six_z."z"." ".$eq_six_a."</br>"  ;

			if ($eq_five_y === $eq_six_y)
			{
				$eqCy = -1 * $eq_six_y ;
				$eqCz = -1 * $eq_six_z ;
				$eqCa = -1 * $eq_six_a ;

				$eqCyr = $eqCy + $eq_five_y ;
				$eqCzr = $eqCz + $eq_five_z ;
				$eqCar = $eqCa + $eq_five_a ;
				echo "eq c = ".$eqCyr."y"." ".$eqCzr."z"." ".$eqCar."</br>" ;

				$ZP =  -1 * $eqCar ;
				if ($eqCzr >= 0)
				{
					$ZR = $ZP / $eqCzr ;
				}
				else
				{
					$ZPP = -1 * $ZP ;
					$ZR = $ZPP / $eqCzr ;
				}
				$ZFR = round($ZR,2);
				echo "z=".$ZFR."</br>" ;

				// to find the value of y form eq A

					$YPP = $ZR * $eqAzr ;
					$YPPP = $eqAar + $YPP ;
					$YPPPP = -1 * $YPPP ;
					if ($eqAyr >= 0)
					{
						$YR = $YPPPP / $eqAyr ;
					}
					else
					{
						$YRR = -1 * $YPPPP ;
						$YR = $YRR / $eqAyr ;
					}
					$YFR = round($YR,2);
						echo "y= ".$YFR."</br>" ;

			// to find the value of x from eq one

			$yv = $YR * $y_one ;
			$zv = $ZR * $z_one ;
			$XP = $yv + $zv + $a_one ;
			$XPP = -1 * $XP ;

			if ($x_one >= 0)
			{
				$XR = $XPP / $x_one ;
			}
			else
			{
				$XRR = -1 * $XPP ;
				$XR = $XRR / $X_one ;
			}

			$XFR = round($XR,2);
			echo "x= ".$XFR."</br>" ;
			header("Location:math_application_bootstrap/../../lenearEquetionThreeVariable?ansy=$YFR&&ansx=$XFR&&ansz=$ZFR") ;
}
		}

		function quardratic_equetion()
		{
			$a = $_POST['x_one'];
			$b = $_POST['x_two'];
			$c = $_POST['three'];

			$p1 =  pow($b,2) - 4 * $a * $c ;
			$a1 = - $b - $p1 ;
			$a2 = -$b + $p1 ;
			$d1 = $a * 2 ;
			$f1 = $a1 / $d1 ;
			$f2 = $a2 / $d1 ;
			// echo $f1."   ".$f2 ;
			header("Location:math_application_bootstrap/../../quadratic_equetion?ans_one=$f1&&ans_two=$f2") ;
			// $_POST['q_ans'] = $f1 ;
			// $_POST['q_ans_two'] = $f2 ;

		}
	}

?>
