<header id="header" ><!--header-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-11">
					<div>
						<label class="heading-label">Math Solutions</label>
					</div>
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left" >
							<ul class="nav navbar-nav collapse navbar-collapse" >
								<!-- <li><a href="menu" class="active">Home</a></li> -->
								<li class="dropdown"><a href="#">Algebric Solution<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="lenearEquetion">Linear Equetion in two Variables ? </a></li>
                                        <li><a href="lenearEquetionThreeVariable">Linear Equetion in three Variables?</a></li>
                                        <li><a href="quadratic_equetion">Quadratic Equetion Involving Real Root ?</a></li>

                                    </ul>
                                </li>
								<li class="dropdown"><a href="#">Geometrcic Solution<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="triangle">Area of Triangle ? </a></li>
                                        <li><a href="circle">Circle Problem </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Vector Solution<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="dotProduct">To Find Dot Product of Two Vectors ? </a></li>
                                        <li><a href="vectorSumMultDiv">Addition, Substraction and Multiplication of the two Vectors ? </a></li>
                                        <li><a href="scalerProduct">Scaler Multiplication of the given two Vectors ? </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Matrix Solution<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="matrixIdentical">To Find the Identical Matrix  </a></li>
                                        <li><a href="matrixTranspose">To Find Out Transpose of the Given Matrix </a></li>
                                        <li><a href="matrixCal">Calculate of the Given Two Matrix  </a></li>
                                     <!--    <li><a href="blog.html">Addition of the Given Two Matrix </a></li>
                                        <li><a href="blog.html">Multiplication of the Given Two Matrix </a></li> -->
                                        <li><a href="matrixInverse">Inverse of the Matrix </a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Truth Table<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="truthTable">Negation</a></li>
                                        <li><a href="truthTable">Conjunction</a></li>
                                        <li><a href="truthTable">Disjunctioni</a></li>
                                        <li><a href="truthTableInput">Truth Table Calculation</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="statisticalAnalysis">Statical Analysis<i class="fa fa-angle-down"></i></a>
                                   <!--  <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Mean </a></li>
                                        <li><a href="blog.html">Mode </a></li>
                                        <li><a href="blog.html">Median </a></li>
                                    </ul> -->
                                </li>
							<!-- 	<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
					</div>

					<div class="col-sm-1">
						<div class="search_box pull-right">
							<label class="user-welcome">
								<?php
									if (isset($_SESSION['login_id']))
									{
										include ("modular/db_connection/db_connection.php") ;
										$db_connection = new db_connection() ;
										$id = $_SESSION['login_id'];
										include ("modular/crud_all.php") ;
										$data = new crud_all() ;
										$data = $data -> user_details_id($id) ;
										while ($row = mysql_fetch_array($data))
										{
											echo "Welcome ! ".$row['email_id'] ;
										}
									}
								?>
							</label>

							<!-- <input type="text" placeholder="Search"/> -->
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->

	</header><!--/header-->
