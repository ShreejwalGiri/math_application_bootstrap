<form method="post" action="modular/condition.php?page=lenear_equetion">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">To find out the Linear Equetion</label>
				<div>
					<label>1. Find out the linear equetion between two variables ?</label>
					<!-- <div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="y_txt"   />
						<label class="horizontal-space">Y</label>
						<select class="linear-eq" name="cal_drp">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select>
						<input class="linear-eq horizontal-space" type="text" name="x_txt"  />
						<label>X</label>
						<label class="horizontal-space">=</label>
						<input class="linear-eq" type="text" name="value_txt"  />
					</div> -->
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

					<!-- 	<select class="linear-eq" name="cal_drp_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
							<input class="linear-eq horizontal-space" type="text" name="a_txt"  />
						<label class="horizontal-space">= 0</label>
						<!-- <input class="linear-eq" type="text" name="value_txt"  /> -->
					</div>

					<h6>2nd Variable </h6>
					<div class="form-control" style="height:7%">
						<input class=" linear-eq" type="text" name="x_txt_two" />
						<label>X</label>
						<!-- <label class="horizontal-space" X/label> -->
						<!-- <select class="linear-eq" name="cal_drp">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
						<input class="linear-eq horizontal-space" type="text" name="y_txt_two"  />
						<label>Y</label>
					<!-- 	<select class="linear-eq" name="cal_drp_two">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->

					<!-- 	<select class="linear-eq" name="cal_drp_three">
							<option value="+" >+</option>
							<option value="-" >-</option>
						</select> -->
						<label>&nbsp;</label>
							<input class="linear-eq horizontal-space" type="text" name="a_txt_two"  />
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

							if (isset($_GET['ansy'])&&isset($_GET['ansx']))
							{
								$resulty = $_GET['ansy'] ;
								$resultx = $_GET['ansx'];

								echo  "<label class='heading-label'>Answer : </br> X:  ".$resultx."</br> Y : ".$resulty."</label>";
							}


							else if (isset($_GET['error']))
							{

								echo  "<div class='alert alert-danger' role='alert'>
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
								 <span class='sr-only'>Error:</span>
								 The value of 1st vector didn't match with 2nd vector
								 </div>" ;
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
