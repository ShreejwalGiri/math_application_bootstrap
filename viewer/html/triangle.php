<form method="post" action="modular/condition.php?page=triangle" >
	<div class = "container" style="margin-bottom: 12.5% " >
		<div class="row">
				<div class="col-md-6">
					<label class="sub-label"> To Find out the Area of the triangle</label>
					<div>	
						<label>1. When all sides of the triangles are given ? </label>
						<input type="text"  class="form-control" placeholder="Length of First sight" name="length_one_txt" />
						<input type="text"  class="form form-control" placeholder="Length of second side" name="length_two_txt"  />
						<input type="text"  class="form form-control" placeholder="Length of third side" name="length_three_txt" />
						<input type="text"  class="form form-control" placeholder="Unit of the traingle" name="unit_one_txt" />
						<input type="submit" value="Answer" class="btn btn-default vertical-space" name="btn_ans_one"  />
					</div>
					<div class="vertical-space">
						<label>2. When Two sides and the angle between the two sides are given ? </label>
						<input type="text"  class="form-control" placeholder="Length of First sight" name="length_four_txt" />
						<input type="text"  class="form form-control" placeholder="Length of second side" name="length_five_txt" />
						<input type="text"  class="form form-control" placeholder="Angle Between two sides" name="angle_txt" />
						<input type="text"  class="form form-control" placeholder="Unit of the traingle" name="unit_two_txt" />
						<input type="submit" value="Answer" class="btn btn-default vertical-space" name="btn_ans_two"  />
					</div>
					<div class="vertical-space">
						<label>3. When the base and the height of the triangle are given assuming that the triangle is a right angled triangle ? </label>
						<input type="text"  class="form-control" placeholder="Height of the traingle" name="height_txt" />
						<input type="text"  class="form form-control" placeholder="Base of the traingle" name="base_txt" />
						<input type="text"  class="form form-control" placeholder="Unit of the traingle" name="unit_three_txt" />
						<input type="submit" value="Answer" class="btn btn-default vertical-space" name="btn_ans_three"  />
					</div> 
				</div>
				<div class="col-md-6" style="margin-top: 5%;">
					<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
						<div class="panel-body">
							<?php 
							global $triangle ; 
								// if (isset($_GET['ans']))
								// {	
																	
								// 	$unit = $_GET['unit'] ; 

								// 	if ($_GET['unit'] != null )
								// 	{
								// 		$value = 2 ; 
								// 	}
								// 	else 
								// 	{
								// 		$value = "" ; 
								// 	}
								// 	$result = $_GET['ans'] ; 
								// 	$unit = $_GET['unit'] ; 
								// 	echo  "<label class='heading-label'>Answer : ".$result." ".$unit."<sup>".$value."</sup></label>"; 
								// }

								if ($triangle != null)
								{
									echo  "<label class='heading-label'>Answer : ".$result." ".$unit."<sup>".$value."</sup></label>"; 
								}
								else 
								{
									echo "sorry value not found" ; 
								}
							?>
						</div>
					</div>
				</div>
		</div>
	</div>
</form>