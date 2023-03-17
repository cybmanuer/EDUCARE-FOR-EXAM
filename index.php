

<html>
<head>
	<meta charset="utf-8" />
	<title> LOGIN | EDUCARE</title>
	<script src="https://kit.fontawesome.com/d676f25411.js" crossorigin="anonymous"></script>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/educare-login.css" rel="stylesheet" />

</head>

<style>
body{
	background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
	height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}

.for{
	margin-left: 20%;
	margin-right: -10%;
	margin-top: 5%;
}
.submit input{
	margin-left: 40%;
	margin-top: 20%;
	height: 50px;
	background-color: #f44336;
	width: 40%;
	color: aliceblue;
	font-size: 15px;
	font-weight: 500;
	border-color: #f44336;
}
.logo{
    width: 20%;
	margin-left: 3%;
	
  }
.container{
	margin-top: -5%;
}
.wizard-title{
	color: black;
}
.wizard-navigation ul a{
	color: black;
	color: black;
	font-size: 20px;
	font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.form-group input{
	color: black;
	font-weight: 800;
	font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
	letter-spacing: 0.2cqb;
}
</style>

<body>
	<!-- <div class="image-container set-full-height" style="background-image: url(https://wallpaperaccess.com/full/521111.jpg); "> -->
	<div class="logo"><br/><img src="./img/Educare-Logo-1.png" height="50px"/></div>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
							<!-- </div> -->
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		LOGIN AS
		                        	</h3>
		                    	</div>

								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#admin" data-toggle="tab">ADMIN</a></li>
			                            <li><a href="#teacher" data-toggle="tab">TEACHER</a></li>
			                            <li><a href="#student" data-toggle="tab">STUDENT</a></li>
			                        </ul>
								</div>

								

				<!-- ADMIN LOGIN PAGE -->
		                        <div class="tab-content">
		                            <div class="tab-pane" id="admin">
		                            	<div class="row">
			                            	<div class="col-sm-12"></div>
									<center>
										<div class="for">
										  <form action="admin_login.php" method="post">
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons"><i class="fa-regular fa-user"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">ADMIN NAME </label>
			                                          	<input name="a_name" type="text" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons"><i class="fa-solid fa-lock"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">PASSWORD</label>
			                                          	<input name="a_pass" type="password" class="form-control" >
			                                        </div>
												</div>

												<div class="submit">
													<input type="submit" name="submit" value="SUBMIT" />
												</div>
												</div>
										  	</form>	   
		                            		</div>
		                            	</div>
										</div>
									</center>



					<!-- STAFF LOGIN PAGE  -->

		                    <div class="tab-pane" id="teacher">		                                                 
								<center>
									<div class="for">
										<form action="teacher_login.php" method="post">
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons"><i class="fa-regular fa-user"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">TEACHER NAME</label>
			                                          	<input name="t_name" type="text" class="form-control" >
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
													<i class="material-icons"><i class="fa-solid fa-lock"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">PASSWORD</label>
			                                          	<input name="t_pass" type="password" class="form-control">
			                                        </div>
												</div>	
											<div class="submit">
                                            <input type="submit" name="submit" value="SUBMIT" />
											</div>
											</div>
										</form>	
		                            	</div>
									</div>
								</center>


					<!-- STUDENT LOGIN PAGE  -->

		                     <div class="tab-pane" id="student">
								<center>
									<div class="for">
										<form action="student_login.php" method="post">
		                                	<div class="col-sm-6">
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons"><i class="fa-regular fa-user"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label">REGISTER NUMBER</label>
			                                          	<input name="s_reg" type="text" class="form-control" required>
			                                        </div>
												</div>
												
												<div class="input-group">
													<span class="input-group-addon">
													<i class="material-icons"><i class="fa-solid fa-lock"></i></i>
													</span>
													<div class="form-group label-floating">
			                                          	<label class="control-label"> PASSWORD</label>
			                                          	<input name="s_pass" type="password" class="form-control" required>
			                                        </div>
												</div>		
												<div class="submit">
                                                <input type="submit" name="submit" value="SUBMIT" />
												</div>
											</div>
										</form>	
										</div>
		                       	 	</div>
								</center>
							</div>

		            	</div> <!-- wizard container -->
		        	</div>
	    			</div> <!-- row -->
				</div> <!--  big container -->

	    </div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>
