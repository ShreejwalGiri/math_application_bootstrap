<?php 

	class vector 
	{
		function dot_product()
		{
			$first_v = $_POST['vector_one_txt'];
			$second_v = $_POST['vector_second_txt'];

			$sub_one = explode(",", $first_v) ; 
			$sub_two = explode(",",$second_v) ; 

			// print_r($sub_one) ; 

			$number_one  = count($sub_one) ; 
			$number_two = count($sub_two) ;

			if ($number_one === $number_two)
			{
				// code for dot product
				for ($i=0 ; $i < $number_one ; $i++)
				{
					 // echo $sub_one[$i]."*"; 
					 $array_one[] = $sub_one[$i] ; 
					
				}

				for ($j= 0 ; $j < $number_two ; $j++)
				{
						// echo $sub_one[$i] ; 
						$array_two[] = $sub_two[$j] ; 
				}

				for ($k = 0 ; $k < count($array_one) ; $k++)
				{
					$total[] = $array_one[$k] * $array_two[$k];
				}

				$result = array_sum($total) ; 

				// code for unit vector 

				for ($u_1 = 0 ; $u_1 < count($array_one) ; $u_1++)
				{
					$unit_v_one[] = $array_one[$u_1] * $array_one[$u_1];
				}


				for ($u_2 = 0 ; $u_2 < count($array_two) ; $u_2++)
				{
					$unit_v_two[] = $array_two[$u_2] * $array_two[$u_2];


				}

				$unit_vector_one = array_sum($unit_v_one);
				$unit_vector_two= array_sum($unit_v_two);



				$result_one = "(".$first_v.')/'.sqrt($unit_vector_one) ; 
				$result_two = "(".$second_v.")/".sqrt($unit_vector_two) ; 
				
				header("Location:math_application_bootstrap/../../dotProduct?ans=$result &&ans_uv_one=$result_one&&ans_uv_two=$result_two");
			}
			else 
			{
				header("Location:math_application_bootstrap/../../dotProduct?error='value error'");
			}

		}

		function sum_sub_mult ()
		{
			$drp = $_POST['cal_drp'];
			$first_v = $_POST['vector_one_txt'];
			$second_v = $_POST['vector_second_txt'];

			$sub_one = explode(",", $first_v) ; 
			$sub_two = explode(",",$second_v) ;

			$number_one  = count($sub_one) ; 
			$number_two = count($sub_two) ;

			if ($number_one === $number_two)
			{
				if ($drp == "sum")
				{
					// vector addotion 
					for ($i=0 ; $i < $number_one ; $i++)
					{
						 // echo $sub_one[$i]."*"; 
						 $array_one[] = $sub_one[$i] ; 
						
					}

					for ($j= 0 ; $j < $number_two ; $j++)
					{
							// echo $sub_one[$i] ; 
							$array_two[] = $sub_two[$j] ; 
					}


					for ($k = 0 ; $k < count($array_one) ; $k++)
					{
						$total[] = $array_one[$k] + $array_two[$k];

					}

					$result = implode(",",$total) ;
					header("Location:math_application_bootstrap/../../vectorSumMultDiv?ans=$result");	
				}
				else if ($drp == "sub")
				{
					// vector substraction 

					for ($i=0 ; $i < $number_one ; $i++)
					{
						 // echo $sub_one[$i]."*"; 
						 $array_one[] = $sub_one[$i] ; 
						
					}

					for ($j= 0 ; $j < $number_two ; $j++)
					{
							// echo $sub_one[$i] ; 
							$array_two[] = $sub_two[$j] ; 
					}


					for ($k = 0 ; $k < count($array_one) ; $k++)
					{
						$total[] = $array_one[$k] - $array_two[$k];

					}

					$result = implode(",",$total) ;
					header("Location:math_application_bootstrap/../../vectorSumMultDiv?ans=$result");	
				}
				else if ($drp == "mult")
				{
					// vector multiplication

					for ($i=0 ; $i < $number_one ; $i++)
					{
						 // echo $sub_one[$i]."*"; 
						 $array_one[] = $sub_one[$i] ; 
						
					}

					for ($j= 0 ; $j < $number_two ; $j++)
					{
							// echo $sub_one[$i] ; 
							$array_two[] = $sub_two[$j] ; 
					}


					for ($k = 0 ; $k < count($array_one) ; $k++)
					{
						$total[] = $array_one[$k] * $array_two[$k];

					}

					$result = implode(",",$total) ;
					header("Location:math_application_bootstrap/../../vectorSumMultDiv?ans=$result");	 

				}
				else 
				{
					header("Location:math_application_bootstrap/../../vectorSumMultDiv?error_drp='value error'");
				}
			}
			else 
			{
				header("Location:math_application_bootstrap/../../vectorSumMultDiv?error='value error'");
			} 
		}

		function scaler_product()
		{
			// to find the scaler product 

			$first_v = $_POST['vector_one_txt'];
			$second_v = $_POST['vector_second_txt'];

			$sub_one = explode(",", $first_v) ; 
			$sub_two = explode(",",$second_v) ; 

			// print_r($sub_one) ; 

			$number_one  = count($sub_one) ; 
			$number_two = count($sub_two) ;

			if ($number_one === $number_two)
			{
				for ($i=0 ; $i < $number_one ; $i++)
				{
					 // echo $sub_one[$i]."*"; 
					 $array_one[] = $sub_one[$i] ; 
					
				}

				for ($j= 0 ; $j < $number_two ; $j++)
				{
						// echo $sub_one[$i] ; 
						$array_two[] = $sub_two[$j] ; 
				}

				for ($k = 0 ; $k < count($array_one) ; $k++)
				{
					// multiplication of vector a and b 
					$total[] = $array_one[$k] * $array_two[$k];
				}

				$dot_product = array_sum($total) ; 

				for ($u_1 = 0 ; $u_1 < count($array_one) ; $u_1++)
				{
					//magnitude of the vector a 
					$unit_v_one[] = $array_one[$u_1] * $array_one[$u_1];
				}


				for ($u_2 = 0 ; $u_2 < count($array_two) ; $u_2++)
				{
					// magnitude of the vector b 
					$unit_v_two[] = $array_two[$u_2] * $array_two[$u_2];
				}

				$unit_vector_one = array_sum($unit_v_one);
				$unit_vector_two= array_sum($unit_v_two);

				$mag_one = sqrt($unit_vector_one) ; 
				$mag_two = sqrt($unit_vector_two) ; 

				$total_mag = $mag_one * $mag_two ; 

				$process = $dot_product / $total_mag ; 
				$angle = cos($process);
				$scaler_product = $total_mag * $angle ;  

				header("Location:math_application_bootstrap/../../scalerProduct?s_ans=$scaler_product&&angle=$angle");	
				
			}
			else 
			{
				header("Location:math_application_bootstrap/../../scalerProduct?error='value error'");
			} 

		}
	}
?>