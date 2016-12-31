<form method="post" action="modular/condition.php?page=sum_sub_mult">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">Adding,Multiplying and Substracting the given Two vectors  </label>
				<div>
					<label>1. Choose weather to Add Multiply or Substract ?</label>
					<select class="btn btn-default dropdown-toggle" name="cal_drp" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<option>Choose</option>
						<option value="sum">Sum</option>
						<option value="sub">Substract</option>
						<option value="mult">Multiply</option>
					</select>
					<input class="form-control" type="text" name="vector_one_txt" placeholder="Input Your first Vector Product" />
					<input class="form-control" type="text" name="vector_second_txt" placeholder="Input Your second Vector Product" />
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 

							if (isset($_GET['ans']))
							{	
								$result = $_GET['ans'] ; 
							
								echo  "<label class='heading-label'>Answer : (".$result.")</label>"; 
 
							}

							else if (isset($_GET['error']))
							{

								echo  "<div class='alert alert-danger' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 The value of 1st vector didn't match with 2nd vector 
								 </div>" ; 

							
							}
							else if (isset($_GET['error_drp']))
							{

								echo  "<div class='alert alert-danger' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 Select the value from the Dropbpx  
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