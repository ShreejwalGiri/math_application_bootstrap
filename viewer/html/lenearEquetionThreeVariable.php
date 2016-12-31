<form method="post" action="modular/condition.php?page=lenear_equetion_three">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">To find out the Linear Equetion</label>
				<div>
					<label>1. Find out the linear equetion between three variables ?</label>
					<h6>1st Variable </h6>
					<div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="x_txt" />
						<label>X</label>
						<!-- <label class="horizontal-space" X/label> -->
						<!-- <select class="linear-eq" name="cal_drp">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="y_txt"  />
						<label>Y</label>
					<!-- 	<select class="linear-eq" name="cal_drp_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="z_txt"  />
						<label>Z</label>
					<!-- 	<select class="linear-eq" name="cal_drp_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
							<input class="linear-eq horizontal-space" type="text" name="a_txt"  />
						<label class="horizontal-space">= 0</label>
						<!-- <input class="linear-eq" type="text" name="value_txt"  /> -->
					</div>

					<!-- Second variable  -->
					<h6>2nd Variable </h6>
					<div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="x_txt_two"   />
						<label>X</label>
						<!-- <label class="horizontal-space" X/label> -->
						<!-- <select class="linear-eq" name="cal_drp_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="y_txt_two"  />
						<label>Y</label>
					<!-- 	<select class="linear-eq" name="cal_drp_two_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="z_txt_two"  />
						<label>Z</label>
					<!-- 	<select class="linear-eq" name="cal_drp_three_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
							<input class="linear-eq horizontal-space" type="text" name="a_txt_two"  />
						<label class="horizontal-space">= 0</label>
						<!-- <input class="linear-eq" type="text" name="value_txt"  /> -->
					</div>

					<!-- third variable  -->
					<h6>3rd Variable </h6>
					<div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="x_txt_three"   />
						<label>X</label>
						<!-- <label class="horizontal-space" X/label> -->
						<!-- <select class="linear-eq" name="cal_drp_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="y_txt_three"  />
						<label>Y</label>
						<!-- <select class="linear-eq" name="cal_drp_two_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="z_txt_three"  />
						<label>Z</label>
					<!-- 	<select class="linear-eq" name="cal_drp_three_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
							<input class="linear-eq horizontal-space" type="text" name="a_txt_three"  />
						<label class="horizontal-space">= 0</label>
						<!-- <input class="linear-eq" type="text" name="value_txt"  /> -->
					</div>
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php
							if (isset($_GET['ansx'])&&isset($_GET['ansy'])&&isset($_GET['ansz']))
							{
								$vx = $_GET['ansx'];
								$vy = $_GET['ansy'];
								$vz = $_GET['ansz'];
								echo  "<label class='heading-label'>Answer : </br>"."X: ".$vx."</br>"."Y: ".$vy."</br>"."Z: ".$vz."</br>"."</label>";
							}

							// if (isset($_GET['ans']))
							// {
							// 	$result = $_GET['ans'] ;
							// 	echo  "<label class='heading-label'>Answer : ".$result."</label>";
							// }
							// else if (isset($_GET['error']))
							// {
							// 	echo  "<div class='alert alert-danger' role='alert'>
							// 	 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
							// 	 <span class='sr-only'>Error:</span>
							// 	 The value of 1st vector didn't match with 2nd vector
							// 	 </div>" ;
							// }
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
