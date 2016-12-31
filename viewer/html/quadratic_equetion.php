<form method="post" action="modular/condition.php?page=quardratic_equetion">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">To find out the Linear Equetion</label>
				<div>
					<label>1. Find out the Quadratic equetion between two variables ?</label>
					<div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="x_one"   />
						<label class="horizontal-space">X<sup>2</sup></label>
						<select class="linear-eq" name="cal_drp">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select>
						<input class="linear-eq horizontal-space" type="text" name="x_two"  />
						<label>X</label>
							<select class="linear-eq" name="cal_drp_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select>
						<input class=" linear-eq" type="text" name="three"   />
						<!-- <label class="horizontal-space">=</label>
						<input class="linear-eq" type="text" name="value_txt"  /> -->
					</div>
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 
						
							if (isset($_GET['ans_one']) && isset($_GET['ans_two'] ))
							{	
								$result = $_GET['ans_one'] ; 
								$result_two = $_GET['ans_two'] ;						
								echo  "<label class='heading-label'>Answer : "."X = ".$result.",".$result_two."</label>"; 	
							}

							else if (isset($_GET['error']))
							{

								echo  "<div class='alert alert-danger' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 Sorry ! error found 
								 </div>" ; 
							}
						?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</form>