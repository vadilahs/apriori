<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html charset=utf-8">
	<title>Sistem Pengelolaan Persediaan</title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="<?= base_url('assets/css/style.css')?>" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS-->
	<link href="<?= base_url('assets/css/font-awesome.css')?>" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->

	 <!-- side nav css file -->
	 <link href='<?= base_url('assets/css/SidebarNav.min.css')?>' media='all' rel='stylesheet' type='text/css'/>
	 <!-- side nav css file -->
	 <link href="<?= base_url('assets/css/custom.css')?>" rel="stylesheet">
<!--//Metis Menu -->

	
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <h1><a class="navbar-brand" href="index"><span class="fa fa-area-chart"></span> Sistem <span class="dashboard_text">Pengelolaan Persediaan</span></a></h1>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
			  <li class="treeview">
                <a href="v_dataTransaksi">
                <i class="fa fa-folder"></i><span>Data Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="v_lihatTransaksi"><i class="fa fa-angle-right"></i> Lihat Data Transaksi</a></li>
                  <li><a href="v_tambahTransaksi"><i class="fa fa-angle-right"></i> Tambah Data Transaksi</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i>
                <span>Data Persediaan</span>
                 <i class="fa fa-angle-left pull-right"></i>
            	</a>
            	<ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-angle-right"></i> Lihat Data Persediaan</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                <i class="fa fa-folder"></i>
                <span>Aturan Asosiasi</span>
                 <i class="fa fa-angle-left pull-right"></i>
            	</a>
            	<ul class="treeview-menu">
                  <li><a href="v_analisisAturan"><i class="fa fa-angle-right"></i> Analisis Aturan Asosiasi</a></li>
                  <li><a href="v_hasilAnalisis"><i class="fa fa-angle-right"></i> Lihat Hasil Analisis</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
	<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<div class="user-name">
										<p>Admin Name</p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								
								<li> <a href="logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		 <!-- js-->
		<script type="text/javascript" src="<?= base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/modernizr.custom.js')?>"></script>

		<!--webfonts-->
		<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
		<!--//webfonts-->
		 <!-- Metis Menu -->
		<script type="text/javascript" src="<?= base_url('assets/js/metisMenu.min.js')?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/custom.js')?>"></script>
		<script src="<?= base_url('assets/js/classie.js')?>"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- Bootstrap Core JavaScript -->
   <script src="<?= base_url('assets/js/bootstrap.js')?>"> </script>
	<!-- //Bootstrap Core JavaScript -->
	<!--scrolling js-->
	<script src="<?= base_url('assets/js/jquery.nicescroll.js')?>"></script>
	<script src="<?= base_url('assets/js/scripts.js')?>"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='<?= base_url('assets/js/SidebarNav.min.js')?>' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
</body>
</html>