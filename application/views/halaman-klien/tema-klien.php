<!DOCTYPE html>
<html lang="zxx"> 
	<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png">
		<?php include('tata-letak-klien/tema-css.php') ?>
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<?php include('tata-letak-klien/tema-loader.php') ?>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header">
				<?php include('tata-letak-klien/tema-atas.php') ?>
				
				<?php include('tata-letak-klien/tema-menu.php') ?>
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->


			<?php include($konten) ?>

		</div> 
		<!-- Main content End -->
	 
		<?php include('tata-letak-klien/tema-bawah.php') ?>

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->

		<!-- Search Modal Start -->
		<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
		    <div class="modal-dialog modal-dialog-centered">
		        <div class="modal-content">
		            <div class="search-block clearfix">
		                <form>
		                    <div class="form-group">
		                        <input class="form-control" placeholder="Search Here..." type="text">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Search Modal End -->

		<?php include('tata-letak-klien/tema-js.php') ?>
	</body>
</html>