<div class="container">
	<div class="row">
		<div class="col-md-6">

			<!-- table for negation  -->
			<section id="cart_items">
				<div class="container">
					<div class="table-responsive cart_info">
						<table class="table table-condensed">
							<thead>
								<tr class="cart_menu " >
									<td colspan="10" align="center"><label id="negation">Negation</label></td>
								</tr>
								<tr class="cart_menu " >
									<td>ID</td>
									<td>P</td>
									<td>Negation(~)</td>
								</tr>
								</thead>
									<tbody>
										 <?php

											include ('modular/db_connection/db_connection.php') ;
											include ('modular/crud_all.php');
											$database = new db_connection() ;

											$data = new crud_all() ;
											$data = $data -> negation() ;
											while ($row = mysql_fetch_array($data))
											{
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['P']; ?></td>
											<td><?php echo $row['Negation']; ?></td>
										</tr>
										<?php
										// closing of the while loop
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</section>



				<!-- table for Conjunction -->
				<section id="cart_items">
					<div class="container">
						<div class="table-responsive cart_info">
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu " >
										<td colspan="10" align="center"><label id="negation">Conjunction</label></td>
									</tr>
									<tr class="cart_menu " >
										<td>ID</td>
										<td>P</td>
										<td>Q</td>
										<td>Conjunction (AND)</td>
									</tr>
								</thead>
								<tbody>
										 <?php

											// include ('modular/db_connection/db_connection.php') ;
											// include ('modular/crud_all.php');
											// $database = new db_connection() ;

											$data = new crud_all() ;
											$data = $data -> conjunction() ;
											while ($row = mysql_fetch_array($data))
											{
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['P']; ?></td>
											<td><?php echo $row['Q']; ?></td>
											<td><?php echo $row['Conjunction']; ?></td>
										</tr>
										<?php
										// closing of the while loop
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</section>
				<!-- table for Disjunction  -->
				<section id="cart_items">
					<div class="container">
						<div class="table-responsive cart_info">
							<table class="table table-condensed">
								<thead>
									<tr class="cart_menu " >
										<td colspan="10" align="center"><label id="negation">Disjunction</label></td>
									</tr>
									<tr class="cart_menu " >
										<td>ID</td>
										<td>P</td>
										<td>Q</td>
										<td>Disjunction (OR)</td>
									</tr>
								</thead>
								<tbody>
										 <?php

											// include ('modular/db_connection/db_connection.php') ;
											// include ('modular/crud_all.php');
											// $database = new db_connection() ;

											$data = new crud_all() ;
											$data = $data ->  disjunction() ;
											while ($row = mysql_fetch_array($data))
											{
										?>
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['P']; ?></td>
											<td><?php echo $row['Q']; ?></td>
											<td><?php echo $row['Disjunction']; ?></td>
										</tr>
										<?php
										// closing of the while loop
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</section>
		</div>
		<div class="col-md-6">
			&nbsp;
		</div>
	</div>
</div>
