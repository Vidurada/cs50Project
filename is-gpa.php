<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>StudTrack</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-4.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    StudTrack
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Typography</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-science"></i>
                        <p>Icons</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
			<!--	<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Information Systems Degree GPA Calculation</a>
                </div>
                <div class="collapse navbar-collapse">
									<!-- commenting notification area -->
                    <!--<ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>-
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>-->


                </div>
            </div>
        </nav>

				<div class="content">
						<div class="container-fluid">
								<div class="row">
										<div class="col-md-12">
												<div class="card">
														<div class="header">
																<!--<h4 class="title">Edit Profile</h4>-->
														</div>
														<div class="content">
																<form>
																		<div class="row">
																				<div class="col-md-6">
																						<div class="form-group">
																								<label>Student Name</label>
																								<input type="text" class="form-control"  placeholder="student name" value="">
																						</div>
																				</div>
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>Index Number</label>
																								<input type="text" class="form-control" placeholder="index number" value="">
																						</div>
																				</div>

																		</div>

																		<div class="row">
																				<div class="col-md-6">
																					<h4 class="title">First Year</h4></br>
																					<h5 class="title">First Semester</h5>

																						<div class="form-group">
																							<table>
																								<tr>
																									<td>
																								<label>IS 1001 Programming and Problem Solving</label>
																								<select> <option> A+ </option>
                                                         <option> A </option>
																												 <option> A- </option>
																												 <option> B+ </option>
																												 <option> B </option>
																												 <option> B- </option>
																												 <option> C+ </option>
																												 <option> C </option>
																												 <option> C- </option>
																												 <option> D+ </option>
																												 <option> D </option>
																												 <option> D- </option>
																												 <option> E </option>
																												 <option> ab </option>
																					       </select><br>

																								 <label>IS 1002 Computer Systems</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select><br>

																									 <label>IS 1003 Information System Concepts</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select><br>

																								 <label>IS 1004 Applications Laboratory</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select>

																								 <label>IS 1005 Introduction to Management</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select>

																								 <label>IS 1006 Discrete Mathematics I</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select>

																								 <label>IS 1007 Fundamentals of Economics</label>
 																								<select> <option> A+ </option>
                                                          <option> A </option>
 																												 <option> A- </option>
 																												 <option> B+ </option>
 																												 <option> B </option>
 																												 <option> B- </option>
 																												 <option> C+ </option>
 																												 <option> C </option>
 																												 <option> C- </option>
 																												 <option> D+ </option>
 																												 <option> D </option>
 																												 <option> D- </option>
 																												 <option> E </option>
 																												 <option> ab </option>
 																					       </select>
																								 <label>EN 1001 Enhancement I </label>
 																								<select> <option> Complete </option>
                                                          <option> Not Complete </option>

 																					       </select>
																						</div>
																				</div>
																				<div class="col-md-6">
																					<br><br>
																					<h5 class="title">Second Semester</h5>
																						<div class="form-group">
																								<label>Last Name</label>
																								<input type="text" class="form-control" placeholder="Last Name" value="Andrew">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>Address</label>
																								<input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>City</label>
																								<input type="text" class="form-control" placeholder="City" value="Mike">
																						</div>
																				</div>
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>Country</label>
																								<input type="text" class="form-control" placeholder="Country" value="Andrew">
																						</div>
																				</div>
																				<div class="col-md-4">
																						<div class="form-group">
																								<label>Postal Code</label>
																								<input type="number" class="form-control" placeholder="ZIP Code">
																						</div>
																				</div>
																		</div>

																		<div class="row">
																				<div class="col-md-12">
																						<div class="form-group">
																								<label>About Me</label>
																								<textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
																						</div>
																				</div>
																		</div>

																		<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
																		<div class="clearfix"></div>
																</form>
														</div>
												</div>
										</div>


								</div>
						</div>
				</div>



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Vidura Dantanarayana</a>, Crafted with Affection
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-door-lock',
            	message: "Welcome to <b>StudTrack</b> - Manage your students from here!."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
