<?php
	//if(isset($_SESSION['email'])&&(isset($_SESSION['password']))){
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="assets/js/jquery-3.1.1.js"></script>
    <script>
   $(function(){
			$('#btn').click(function(){
				f=$('#fn').val();
				l=$('#ln').val();
				e=$('#em').val();
				a=$('#ad').val();
				p=$('#ph').val();
				pp=$('#pp').val();
			$.post("processadmin.php", {firstname:f, lastname:l, email:e,address:a, phone:p, passport:pp}
			);	
			})
		});
    </script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DEE BANK PLC</a>
            </div>

            <div class="header-right">

                <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Jhon Deo Alex
                            <br />
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                            <li>
                                <a href="adminreg.php"><i class="fa fa-desktop "></i>Register Staff</a>
                            </li>
                            <li>
                                <a href="veiwstaff.php"><i class="fa fa-toggle-on"></i>View staff List</a>
                            </li>
                            <li>
                                <a href="customerreg.php"><i class="fa fa-bell "></i>Register Customer</a>
                            </li>
                             <li>
                                <a href="view.php"><i class="fa fa-circle-o "></i>View Customer list</a>
                            </li>
                             <li>
                                <a href="logout.php"><i class="fa fa-code "></i>Log Out</a>
                            </li>
                    </li>
				</ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">REGISTRATION FOR STAFFS</h1>
                        <h1 class="page-subhead-line">Provide all necessary information here </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="main-box mb-red center-block">
                        <form action="processadmin.php" method="post" enctype="multipart/form-data">
                        	<label> Firstname</label>
                          <input type="text" name="firstname" class="form-control" id="fn"><br>
                          <label> Lastname</label>
                          <input type="text" name="lastname" class="form-control" id="ln" > <br>
                          <label> Email</label>
                          <input type="email" name="email" class="form-control" id="em"> <br>
                          <label> Address</label>
                          <input type="text" name="address" class="form-control" id="ad"><br>
                          <label> Phone number</label> 
                          <input type="text" name="phone" class="form-control" id="ph"> <br>
                          <label> Password</label>
                          <input type="password" name="password" class="form-control" id="pp"><br> 
                          <label>Passport</label>
                          <input type="file" name="file" class="form-control"></br>
                          <input type="button" value="REGISTER" id="btn" class="btn btn-info">
                          </form>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
				</div>
                </div>
                </div>
				
    <div id="footer-sec">
        &copy; 2018 Delight| Design By : <a href="http://www.binarytheme.com/" target="_blank">Delight.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    


</body>
</html>
<?php
//	}
//	else{	$errorMsg="Please login first";
//			include("login.php");
//		};
?>
