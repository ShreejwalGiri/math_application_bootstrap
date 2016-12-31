<?php 
	class geometric_bll 
	{
		
		// to find out the area of the traiangle 
		function triangle()
		{
			if (isset($_POST['btn_ans_one']))
			{
				// for the traingle with 3 sides given 

				$l_one = $_POST['length_one_txt'];
				$l_two = $_POST['length_two_txt'];
				$l_three = $_POST['length_three_txt'];
				$unit = $_POST['unit_one_txt']; 

				$process = $l_one + $l_two + $l_three ; 
				$process *= .5 ; 
				$s = $process ; 
				// herons formula 
				$calculate = $s*($s - $l_one)*($s - $l_two)*($s - $l_three);
				$result = sqrt($calculate) ;
				$triangle = $result ; 
				header ("Location:math_application_bootstrap/../../triangle"); 
				// header ("Location:math_application_bootstrap/../../triangle?ans=$result&&unit=$unit") ; 
			}
			else if (isset($_POST['btn_ans_two']))
			{
				// for the traingle with 2 sides and a angle
				$l_one = $_POST['length_four_txt'];
				$l_two = $_POST['length_five_txt'];
				echo $angle = $_POST['angle_txt']; 
				$unit = $_POST['unit_two_txt']; 
				$sin = sin(deg2rad($angle)) ; 
				$process = $l_one * $l_two * $sin  ; 
				$process *= .5 ; 
				$result = $process ; 
				
				header ("Location:math_application_bootstrap/../../triangle?ans=$result&&unit=$unit") ; 

			}
			else if (isset($_POST['btn_ans_three']))
			{
				// for right angle traingle 
				$area = $_POST['height_txt'] ;
				$base = $_POST['base_txt'];
				$unit = $_POST['unit_three_txt']; 

				$process = $area * $base  ; 
				$process *= .5 ; 
				$answer = $process ; 

				header ("Location:math_application_bootstrap/../../triangle?ans=$answer&&unit=$unit") ; 
			} 
		}

		// to find out the area and circumference of the circle 
		function circle ()
		{
			$drop = $_POST['r_p_drp'];
			$value = $_POST['value_txt'];
			$unit = $_POST['unit_txt'];

			if (isset($_POST['btn_ans_one']))
			{
				if ($drop == "radius")
				{
					 
					$pie = pi() ; 
					$square = $value * $value; 
					$process_area  = $pie * $square ; 
					$answer_area  = $process_area ;
					$process_circumference = 2 * $pie * $value ; 
					

					header ("Location:math_application_bootstrap/../../circle?ans_a=$answer_area&&ans_s=$process_circumference&&unit=$unit") ;  

				}
				else if ($drop == "parameter")
				{
					$pie = pi(); 
					$square = $value * $value; 
					$process =  .25 * $pie * $square ;
					$answer_area = $process ;  
					$process_circumference =  $pie * $value ; 
					header ("Location:math_application_bootstrap/../../circle?ans_a=$answer_area&&ans_s=$process_circumference&&unit=$unit") ;  
				}
				else 
				{
					header ("Location:math_application_bootstrap/../../circle?error=data error") ; 
				}
			}

			if (isset($_POST['btn_ans_two']))
			{
				$check = $_POST['inverse_check'];
				$drop = $_POST['r_p_rvr_drp'];
				$value = $_POST['value_two_txt'];
				$unit = $_POST['unit_two_txt'];
				if ($drop == "radius")
				{
					$pie = pi() ; 
					$process = 1/ 2* $pie ; 
					$result = $value / $process ; 
					$answer = $result ;  
					header ("Location:math_application_bootstrap/../../circle?ans_r=$answer&&unit=$unit") ;  
				}
				else if ($drop == "parameter")
				{
					$pie = pi() ; 
					$result  = $pie / $value  ; 
					$answer = $result ; 
					header ("Location:math_application_bootstrap/../../circle?ans_p=$answer&&unit=$unit") ; 
				}
				else 
				{
					header ("Location:math_application_bootstrap/../../circle?error=data error") ; 
				}

			}
		
		}
	}
?>