<?php session_start();
session_id();
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
                                <?php
									$_SESSION['full'];
								 ?>
                            <br />
                            </div>
                        </div>

                    </li>


                     <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Home</a>
                    </li>
                            <li>
                                <a href=" service.php"><i class="fa fa-send" ></i>Services</a>
                            </li>
                            <li>
                                <a href="about.php "><i class="fa fa-file-o"></i>About us</a>
                            </li>
                            <li>
                                <a href=" gallery.php "><i class="fa fa-file "></i>Gallery</a>
                            </li>
                             <li>
                                <a href="contact.php "><i class="fa fa-file-o "></i>Contact Us</a>
                            </li>
                             <li>
                                <a href="logout.php"><i class="fa fa-long-arrow-right" ></i>Log Out</a>
                            </li>
                    </li> 
                        </ul>
                    </li>
				</div>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <script src="file:///C|/wamp64/www/deebank/admin/assets/js/jquery-3.1.1.js"></script>
                <script>
				$(function(){
					$('#dep').click(function(){
						$post
						})
					});
				
                </script>
                <!-- /. ROW  --> 
                <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="transfer.php">
                                <i class="fa fa-plug fa-5x"></i>
                                <h5>TRANSFER</h5>
                            </a>
                            <form name="form" id="form" action="transfer2" method="post">
                           Transfer From:
                           <input type="text" name="from" class="form-control"></br>
                           Transfer To:
                            <input type="text" name="to" class="form-control"></br>
                            Amount:
                            <input type="text" name="amount" class="form-control"></br>
                            Date
                            <input type="date" name="date" id="c" class="form-control"></br>
                            <input type="submit" name="btn" id="dep"  class="form-control btn btn-success" value="Transfer"></br>
                          </form>
                        </div>
                    </div>

        </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
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
	
?>
