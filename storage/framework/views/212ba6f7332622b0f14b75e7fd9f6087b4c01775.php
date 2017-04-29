<!DOCTYPE html>
<html lang="en">
<head>
	<title>RHM- Locked</title>

	<!-- BEGIN META -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="rhm,rent,housing,manage">
	<meta name="description" content="Easy & hassle free Rent & Housing Management Web Application">
	<!-- END META -->

	<!-- BEGIN STYLESHEETS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/bootstrap.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/materialadmin.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo e(url('/')); ?>/assets/css/font-awesome.min.css" />
	<!-- END STYLESHEETS -->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/js/libs/utils/html5shiv.js"></script>
	<script type="text/javascript" src="<?php echo e(url('/')); ?>/assets/js/libs/utils/respond.min.js"></script>
	<![endif]-->

</head>
<body class="menubar-hoverable header-fixed ">

	<!-- BEGIN LOCKED SECTION -->
	<section class="section-account">
		<div class="img-backdrop" style="background-image: url('../../assets/img/img16.jpg')"></div>
		<div class="spacer"></div>
		<div class="card contain-xs style-transparent">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12">
						<img class="img-circle" src="../../assets/img/user01.jpg" alt="" />
						<h2><?php echo e(session('name')); ?></h2>
						<form class="form" action="/login" accept-charset="utf-8" method="post">
							<div class="form-group floating-label">
								<div class="input-group">
									<div class="input-group-content">
										<input type="password" id="password" class="form-control" name="password">
										<label for="password">Password</label>
										<p class="help-block"><a href="/login">? Not <?php echo e(session('name')); ?></a></p>
									</div>
									<div class="input-group-btn">
										<a href="/dashboard" class="btn btn-floating-action btn-primary" ><i class="fa fa-unlock"></i></a>
									</div>
								</div><!--end .input-group -->
							</div><!--end .form-group -->
						</form>
					</div><!--end .col -->
				</div><!--end .row -->
			</div><!--end .card-body -->
		</div><!--end .card -->
	</section>
	<!-- END LOCKED SECTION -->

			<!-- BEGIN JAVASCRIPT -->
			<script src="<?php echo e(url('/')); ?>/assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
			<script src="<?php echo e(url('/')); ?>/assets/js/libs/bootstrap/bootstrap.min.js"></script>
			<script src="<?php echo e(url('/')); ?>/assets/js/core/source/App.js"></script>
			<script src="<?php echo e(url('/')); ?>/assets/js/core/source/AppForm.js"></script>

			<!-- END JAVASCRIPT -->

		</body>
		</html>
