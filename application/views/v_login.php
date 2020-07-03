<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sistem Pengelolaan Persediaan</title>
	<!-- Bootstrap Core CSS -->
	<link rel='stylesheet' href="css/bootstrap.css" type='text/css' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<link href="<?php echo base_url('css/css_lo.css'); ?>" rel='stylesheet'/>

	<!-- font-awesome icons CSS-->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //font-awesome icons CSS-->

</head>
<body>
	<div class="main">
		<h1>SISTEM PENGELOLAAN PERSEDIAAN <br>menggunakan Association Rule Mining</h1>
		<div class="main-w3lsrow">
			<!-- login form -->
			<div class="login-form login-form-left"> 
				<div class="agile-row">
					<div class="head">
						<h2>M A S U K</h2>
						<span class="fa fa-lock"></span>
					</div>					
					<div class="clear"></div>
					<div class="login-agileits-top"> 	
						<form action="<?php echo site_url('Login/aksiLogin'); ?>"" method="POST"> 
							<input type="text" class="name" name="username" Placeholder="Nama Pengguna" required=""/>
							<input type="password" class="password" name="password" Placeholder="Kata sandi" required=""/>
							<input type="submit" value="Masuk"> 
						</form> 	
					</div> 
					

				</div>  
			</div>  
		</div>
</body>
</html>