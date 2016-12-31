<form method="post" action="modular/condition.php?page=matrix_identical">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-6">
				<label class="sub-label">To Find Out Weather Given Two Matrix are Identical to Each Other </label>
				<div>
					<label>1. To Find out the Identical Matrix ? </label>
					<!-- <select class="btn btn-default dropdown-toggle" name="cal_drp" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						<option>Choose</option>
						<option value="sum">Sum</option>
						<option value="sub">Substract</option>
						<option value="mult">Multiply</option>
					</select> -->
					<input class="form-control" type="text" name="matrixTxt" placeholder="Input Your first Mtrix Product" />
					<input class="form-control" type="text" name="matrixTwoTxt" placeholder="Input Your second Matrix Product" />
          <h6>(Note: Space will differentiate the the dimention of matrix, For Eg : 111 222 333 is 3X3 Matrix )</h6>
					<h6>(Note: Here null value will work as an 0, For Eg : 111 11 111 = 111 110 111 )</h6>
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php

							if (isset($_GET['ans'])&&isset($_GET['result']))
							{
                $ans = $_GET['ans'];
								$result = $_GET['result'] ;

								echo  "<label class='heading-label'>".$ans."</label></br>";
                echo  "<h6 class='heading-label'>".$result."</h6></br>";

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
