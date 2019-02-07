<?php
/*session_start();
require_once ('../../lib/func.php');*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title>Bootstrap 4 Admin Template</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="./view/assets/images/favicon.ico">

		<!-- Switchery css -->
		<link href="./view/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
		
		<!-- Bootstrap CSS -->
		<link href="./view/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Font Awesome CSS -->
		<link href="./view/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		
		<!-- Custom CSS -->
		<link href="./view/assets/css/style.css" rel="stylesheet" type="text/css" />
		
		<!-- BEGIN CSS for this page -->

		<!-- END CSS for this page -->
				
</head>

<body class="adminbody">

<div id="main">

	<!-- top bar navigation -->
	<div class="headerbar">

		<!-- LOGO -->
        <div class="headerbar-left">
			<a href="index.html" class="logo"><img alt="logo" src="./view/assets/images/logo.png" /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">


						


                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="./view/assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="/admin/logout.php" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Выход</span>
                                </a>


                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
								<i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

	</div>
	<!-- End Navigation -->
	
 
	<!-- Left Sidebar -->
	<div class="left main-sidebar">
	
		<div class="sidebar-inner leftscroll">

			<div id="sidebar-menu">
                <?php
                sidebarMenu();
                ?>


            <div class="clearfix"></div>

			</div>
        
			<div class="clearfix"></div>

		</div>

	</div>
	<!-- End Sidebar -->


    <div class="content-page">
	
		<!-- Start content -->
        <div class="content">
            
			<div class="container-fluid">

					
							<div class="row">
									<div class="col-xl-12">
                                        <?php
                                        breadCrumb('Статистика');
                                        ?>
									</div>
							</div>
							<!-- end row -->

							
							<div class="row">
									<div class="col-xl-12">									
                                        <?php
                                        main();
                                        ?>
									</div>
							</div>



            </div>
			<!-- END container-fluid -->

		</div>
		<!-- END content -->

    </div>
	<!-- END content-page -->
    
	<footer class="footer">
		<span class="text-right">
		Copyright <a target="_blank" href="#">EasyBlog.</a>
		</span>
		<span class="float-right">
		Powered by <a target="_blank" href="https://www.madhowl.ru"><b>MadHowl</b></a>
		</span>
	</footer>

</div>
<!-- END main -->

<script src="./view/assets/js/modernizr.min.js"></script>
<script src="./view/assets/js/jquery.min.js"></script>
<script src="./view/assets/js/moment.min.js"></script>

<script src="./view/assets/js/popper.min.js"></script>
<script src="./view/assets/js/bootstrap.min.js"></script>

<script src="./view/assets/js/detect.js"></script>
<script src="./view/assets/js/fastclick.js"></script>
<script src="./view/assets/js/jquery.blockUI.js"></script>
<script src="./view/assets/js/jquery.nicescroll.js"></script>
<script src="./view/assets/js/jquery.scrollTo.min.js"></script>
<script src="./view/assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="./view/assets/js/pikeadmin.js"></script>

<!-- BEGIN Java Script for this page -->

<!-- END Java Script for this page -->

</body>
</html>