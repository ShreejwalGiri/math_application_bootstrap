
				<form method="post" action="modular/php/truth_table_bll.php" >
					<div class="form-control" style=" width:50%; height: 70%; margin-left: 25%; margin-bottom: 5%; " >
						<h4>Nagation</h4>
						<hr>
						<input type="submit" value="Answer" class="btn btn-default" name="btn" />
						<select style="width:15%;" name="drp_n">
							<option value="True" >True</option>
							<option value="False" >False</option>
						</select>
						<label>~ </label>
						<label>=</label>
						<label Value="Ans">
						<?php
						 	if (isset($_GET['ans_n']))
						 	{
						 		echo $_GET['ans_n'];
						 	}
						 ?>

						</label>


						<h4>Conjunctioin</h4>
						<hr>
						<input type="submit" value="Answer" class="btn btn-default" name="btn_two" />
						<select style="width:15%;" name="drp_c">
							<option value="True" >True</option>
							<option value="False" >False</option>
						</select>
							<label>AND</label>
						<select style="width:15%;" name="drp_c_two">
							<option value="True" >True</option>
							<option value="False" >False</option>
						</select>
						<label>=</label>
						<label Value="Ans">
							<?php


							 	if (isset($_GET['ans_c']))
							 	{
							 		echo $_GET['ans_c'];
							 	}


						   ?>

						</label>


						<h4>Disjunctioin</h4>
						<hr>
						<input type="submit" value="Answer" class="btn btn-default" name="btn_three" />
						<select style="width:15%;" name="drp_d">
							<option value="True" >True</option>
							<option value="False" >False</option>
						</select>
							<label>OR</label>
						<select style="width:15%;" name="drp_d_two" >
							<option value="True" >True</option>
							<option value="False" >False</option>
						</select>
						<label>=</label>
						<label Value="Ans">
							<?php

							 	if (isset($_GET['ans_d']))
							 	{
							 		echo $_GET['ans_d'];
							 	}

							 ?>

						</label>

					</div>
				</form>
