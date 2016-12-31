<form method="post" action="modular/condition.php?page=dot_product">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-3">
				<label class="sub-label">To Find the Dot Product of the given two vectors and also to know the unit vector  </label>
				<div>
					<label>1. Two Find the Dot Product of given Two vectors ?</label>
					<input class="form-control" type="text" name="vector_one_txt" placeholder="Input Your first Vector Product" />
					<input class="form-control" type="text" name="vector_second_txt" placeholder="Input Your second Vector Product" />
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 

							if (isset($_GET['ans']))
							{	
								$result = $_GET['ans'] ; 
								$uv_one = $_GET['ans_uv_one'];
								$uv_two = $_GET['ans_uv_two'];
								echo  "<label class='heading-label'>Dot Product : ".$result."</label>"; 

								echo  "<label class='heading-label'>Unit Vector For vector one  : ".$uv_one."</label>"; 
								echo  "<label class='heading-label'>Unit Vector For vector two  : ".$uv_two."</label>"; 
							}

							else if (isset($_GET['error']))
							{

								echo  "<div class='alert alert-danger' role='alert'> 
								 <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span> 
								 <span class='sr-only'>Error:</span>
								 The value of 1st vector didn't match with 2nd vector 
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