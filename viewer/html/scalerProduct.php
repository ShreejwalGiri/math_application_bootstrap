<form method="post" action="modular/condition.php?page=scaler_product">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">To find out the Scaler Vector of the given vectors</label>
				<div>
					<label>1. Scaler Vector between the two vectors ?</label>
					<input class="form-control" type="text" name="vector_one_txt" placeholder="Input Your first Vector Product" />
					<input class="form-control" type="text" name="vector_second_txt" placeholder="Input Your second Vector Product" />
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 

							if (isset($_GET['s_ans']))
							{	
								$result = $_GET['s_ans'] ; 
								$angle = $_GET['angle'];
							
								echo  "<label class='heading-label'>Scaler Product : ".$result."</label>"; 
								echo  "<label class='heading-label'>Angle : ".$angle."<sup>o</sup></label>"; 
 
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