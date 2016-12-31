<form method="post" action="modular/condition.php?page=circle">
	<div class="container" style="margin-bottom: 10% ">
		<div class="row">
			<div class="col-md-4">
				<label class="sub-label"> To Find out the Area and Circumference of the Circle</label>
				
				<div>
					<label>State Value of input : </label>
				
					<select class="btn btn-default dropdown-toggle" name="r_p_drp" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<option value="">choose</option>
						<option value="radius" >Radius</option>
						<option value="parameter">Parameter</option>
					</select>
					<input type="text" name="value_txt" class="form-control" placeholder="Input a value" />
					<input type="text" name="unit_txt" class="form-control" placeholder="Unit of the Circle" />
					<input class = "btn btn-default vertical-space" type="submit" name="btn_ans_one" value="Answer" />
				</div>
				<div class="vertical-space">
					<label>1. To Compile Reverse Calculation</label>
					<div class="vertical-space">
						<!-- <input  type="checkbox" name="inverse_chk"  value="Compile reverse calculation" /> -->
						<!-- Compile reverse calculation <br> -->
					</div>
					<select class="btn btn-default dropdown-toggle vertical-space" name="r_p_rvr_drp" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<option value="">choose</option>
						<option value="radius" >Radius</option>
						<option value="parameter">Parameter</option>
					</select>
					<input type="text" name="value_two_txt" class="form-control" placeholder="Input a Circumference value" />
					<input type="text" name="unit_two_txt" class="form-control" placeholder="Unit of the Circle" />
					<input class = "btn btn-default vertical-space" type="submit" name="btn_ans_two" value="Answer" />
				
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 
							if(isset($_GET['unit']))
							{
								$unit = $_GET['unit'] ;
							} 
							if (isset($_GET['ans_a']) && isset($_GET['ans_s']))
							{	
								
								if ($_GET['unit'] != null )
								{
									$value = 2 ; 
								}
								else 
								{
									$value = "" ; 
								}
								
								$result_a = $_GET['ans_a'];
								$result_s = $_GET['ans_s'] ; 
								$unit = $_GET['unit'] ; 
								echo  "<label class='heading-label'>Area of Circle  : ".$result_a." ".$unit."<sup>".$value."</sup></label>"; 

								echo  "<label class='heading-label vertical-space'>Circumference of Circle  : ".$result_s." ".$unit."<sup>"."</sup></label>";	
							}

							else if ( !isset($_GET['ans_s'])  )
							{

								if (isset($_GET['ans_r']))
								{
									$result = $_GET['ans_r'];
									
							 		echo  "<label class='heading-label'>Radius : ".$result." ".$unit."<sup>"."</sup></label>";
								}
								else if (isset($_GET['ans_p']))
								{
									$result = $_GET['ans_p'] ; 
							 		echo  "<label class='heading-label'>Parameter : ".$result." ".$unit."<sup>"."</sup></label>";
								}

								// else if (isset($_GET['error']))

								// { 
						?>	 
									
							<!-- 	<div class="alert alert-danger" role="alert">
									 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									 <span class="sr-only">Error:</span>
										  No value Selected from the Dropbox
								</div> -->

						<?php
								// end of else statement
								//}
							// end of else if statement 	
							}

							if (isset($_GET['error']))
							{

						?>
								
							<div class="alert alert-danger" role="alert">
								 <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								 <span class="sr-only">Error:</span>
									 No value Selected from the Dropbox
							</div>

						<?php

							// end of  if statement 	
							}

						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>