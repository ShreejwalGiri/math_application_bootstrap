<form method="post" action="modular/condition.php?page=matrix_inverse">
	<div class="container" style="margin-bottom: 9% ">
		<div class="row" >
			<div class="col-md-3">
				<label class="sub-label">To calculate the inverse of the given matrix   </label>
				<div>
					<label>1. Calculation Inverse Matrix for 2 X 2 Matrix ?</label>
					<div class="row" style="margin-left:5%;">
						<div>
							<input class="matrix_input" name="a1" />
							<input class="matrix_input horizontal-space" name="a2" />
						</div>
						<div class="matrix-vertical">
							<input class="matrix_input" name="b1" />
							<input class="matrix_input horizontal-space" name="b2" />
						</div>
					</div>
					
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans" />

					<label style="margin-top: 50px ; ">2. Calculation Inverse Matrix for 3 X 3 Matrix ?</label>
					<div class="row" style="margin-left:5%;">
						<div>
							<input class="matrix_input" name="a13"  />
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
							<input class="matrix_input horizontal-space" name="c23"  />
							<input class="matrix_input horizontal-space" name="c33"  />
						</div>
					</div>
					
					<input class="btn btn-default vertical-space" type="submit"  value="Answer" name="btn_ans_two" />
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default" style="height:50%;background-color:#ECEDEA;">
					<div class="panel-body">
						<?php 
							if (isset($_GET['ansa']) && isset($_GET['ansb']) && isset($_GET['ansc']) && isset($_GET['ansd']))
							{	
								$a = $_GET['ansa'] ; 
								$b = $_GET['ansb'] ;
								$c = $_GET['ansc'] ;
								$d = $_GET['ansd'] ;
							 
								echo  "<label class='heading-label'>Answer : </br>[".$a.",".$b."</br>".$c.",".$d."]</label>";
							}
							else if (isset($_GET['sansa']) && isset($_GET['sansb']) && isset($_GET['sansc']) && isset($_GET['sansd']) && isset($_GET['sanse']) && isset($_GET['sansf']) && isset($_GET['sansg']) && isset($_GET['sansh']) && isset($_GET['sansi']))
							{	
								$a = $_GET['sansa'] ; 
								$b = $_GET['sansb'] ;
								$c = $_GET['sansc'] ;
								$d = $_GET['sansd'] ;
								$e = $_GET['sanse'] ; 
								$f = $_GET['sansf'] ;
								$g = $_GET['sansg'] ;
								$h = $_GET['sansh'] ;
								$i = $_GET['sansi'] ;

							 
								echo  "<label class='heading-label'>Answer : </br>[".$a.",".$b.",".$c."</br>".$d.",".$e.",".$f."</br>".$g.",".$h.",".",".$i."]</label>";
							}
						?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</form>