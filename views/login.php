<?php
//Conexaõ
include '../controller/dbconexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- Mirrored from seantheme.com/color-admin/admin/apple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 23:55:26 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="../assets/css/apple/app.min.css" rel="stylesheet" />
	<link href="../assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body class="pace-top"  >
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show" >
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade"  >
		<!-- begin login -->
		<div class="login login-v1" >
			<!-- begin login-container -->
			<div class="login-container">
				<!-- begin login-header -->
				<div class="login-header">
					<div class="brand">
						<span class="logo"><i class="ion-ios-cloud"></i></span> <b>Login</b>
						<small>Insira seu email e senha!</small>
					</div>
					<div class="icon">
						<i class="fa fa-lock"></i>
					</div>
				</div>
				<!-- end login-header -->
				<!-- begin login-body -->
				<div class="login-body">
					<!-- begin login-content -->
					<div class="login-content">
						<form action="../controller/login.php" method="POST" class="margin-bottom-0">
							<div class="form-group m-b-20">
								<input type="text" name="Email" class="form-control form-control-lg inverse-mode" placeholder="Email" requirde />
							</div>
							<div class="form-group m-b-20">
								<input type="password" name="Password" class="form-control form-control-lg inverse-mode" placeholder="Password" required />
							</div>
							<div class="checkbox checkbox-css m-b-20">
								<input type="checkbox" id="remember_checkbox" />  
								<label for="remember_checkbox">  
								Lembra-me
								</label> 
							</div>
							<div class="login-buttons">
								<button type="submit" name="btn-entrar"  class="btn btn-outline-primary btn-sm">Entrar</button>
							    <a href="./registro.php" class="btn btn-outline-primary btn-sm ">Registrar</a>
							</div>
						</form>
					</div>
					<!-- end login-content -->
				</div>
				<!-- end login-body -->
			</div>
			<!-- end login-container -->
		</div>
		<!-- end login -->		

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

</body>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/js/app.min.js"></script>
	<script src="../assets/js/theme/apple.min.js"></script>
	<!-- ================== END BASE JS ================== -->
<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>

<!-- Mirrored from seantheme.com/color-admin/admin/apple/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 23:55:26 GMT -->
</html>

