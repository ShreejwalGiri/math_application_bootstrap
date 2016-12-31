<form method="post" action="modular/condition.php?page=matrix">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-3">
				<label class="sub-label">To Add, Substract and Multiply the given two matrix  </label>
				<div>
					<label>1. Calculation of the Given 2X2 matrix ?</label>
				
					<select name="cal_drp" style="margin-top: 5px ;">
						<option value="+" >Add(+)</option>
						<option value="-" >Substract(-)</option>
						<option value="*" >Multiply(*)</option>
					</select>
				
					<h6>Matrix a </h6>
					<div class="row" style="margin-left:5%; margin-top: 20px; ">
						<div>
							<input class="matrix_input" name="a1" />
							<input class="matrix_input horizontal-space" name="a2" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="b1" />
							<input class="matrix_input horizontal-space" name="b2" />
						</div>
					</div>
					<h6>Matrix b </h6>
					<div class="row" style="margin-left:5%; margin-top: 20px; ">
						<div>
							<input class="matrix_input" name="a1s" />
							<input class="matrix_input horizontal-space" name="a2s" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="b1s" />
							<input class="matrix_input horizontal-space" name="b2s" />
						</div>
					</div>
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				<!-- 	<input class="form-control" type="text" name="matrix_one_txt" placeholder="Input your First Matrix" required="" />
					<input class="form-control" type="text" name="matrix_second_txt" placeholder="Input Your second Matrix" required="" /> -->
			
					<label style="margin-top: 20px;">2. Calculation of the Given 3X3 matrix ?</label>
				
					<select name="cal_drp_two" style="margin-top: 5px ;">
						<option value="+" >Add(+)</option>
						<option value="-" >Substract(-)</option>
						<option value="*" >Multiply(*)</option>
					</select>
					<h6>Matrix a </h6>
					<div class="row" style="margin-left:5%; margin-top: 20px; ">
						<div>
							<input class="matrix_input" name="a13" />
							<input class="matrix_input horizontal-space" name="a23" />
							<input class="matrix_input horizontal-space" name="a33" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="b13" />
							<input class="matrix_input horizontal-space" name="b23" />
							<input class="matrix_input horizontal-space" name="b33" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="c13" />
							<input class="matrix_input horizontal-space" name="c23" />
							<input class="matrix_input horizontal-space" name="c33" />
						</div>
					</div>
					<h6>Matrix b </h6>
					<div class="row" style="margin-left:5%; margin-top: 20px; ">
						<div>
							<input class="matrix_input" name="a13s" />
							<input class="matrix_input horizontal-space" name="a23s" />
							<input class="matrix_input horizontal-space" name="a33s" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="b13s" />
							<input class="matrix_input horizontal-space" name="b23s" />
							<input class="matrix_input horizontal-space" name="b33s" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="c13s" />
							<input class="matrix_input horizontal-space" name="c23s" />
							<input class="matrix_input horizontal-space" name="c33s" />
						</div>
					</div>
							<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans_two" />

				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 
							// if (isset($_GET['ans']))
							// {	
							// 	$result = $_GET['ans'] ; 
							 
							// 	echo  "<label class='heading-label'>Answer : [".$result."]</label>";
							// }
							if (isset($_GET['ra1']) && isset($_GET['ra2']) && isset($_GET['rb1']) && isset($_GET['rb2']) ) 
							{
									echo  "<label class='heading-label'>Answer : </br>[".$_GET['ra1']." ".$_GET['ra2']."</br>".$_GET['rb1']." ".$_GET['rb2']."]</label>";
							}
							else if (isset($_GET['ra13']) && isset($_GET['ra23']) && isset($_GET['ra33']) && isset($_GET['rb13']) && isset($_GET['rb23']) && isset($_GET['rb33']) && isset($_GET['rc13']) && isset($_GET['rc23']) && isset($_GET['rc33']) ) 
							{
									echo  "<label class='heading-label'>Answer : </br>[".$_GET['ra13']." ".$_GET['ra23']." ".$_GET['ra33']."</br>".$_GET['rb13']." ".$_GET['rb23']." ".$_GET['rb33']."</br>".$_GET['rc13']." ".$_GET['rc23']." ".$_GET['rc33']."]</label>";
							}

							else if (isset($_GET['error']))
							{
								echo  "<div class='alert alert-danger' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 The value of 1st matrix didn't match with 2nd matrix
								 </div>" ; 
								 //echo $display ;
							}

							else if (isset($_GET['error_drp']))
							{
								echo  "<div class='alert alert-info' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 Please Select the value from the dropbox
								 </div>" ; 
								 //echo $display ;
							}
						?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</form>