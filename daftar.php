<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>SMAN 2 BANDUNG LIBRARY</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="<?php echo base_url();?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		
		<link href="<?php echo base_url();?>themes/css/bootstrappage.css" rel="stylesheet"/>
		
		<!-- global styles -->
		<link href="<?php echo base_url();?>themes/css/flexslider.css" rel="stylesheet"/>
		<link href="<?php echo base_url();?>themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="<?php echo base_url();?>themes/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>				
		<script src="<?php echo base_url();?>themes/js/superfish.js"></script>	
		<script src="<?php echo base_url();?>themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt"> <!--SEARCH-->
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="<?php echo base_url();?>index.php/chome/daftar">Sign Up</a></li>
							<li><a href="<?php echo base_url();?>index.php/clogin/login">Sign In</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="<?php echo base_url();?>ndex.html" class="logo pull-left"><img src="<?php echo base_url();?>themes/images/logoo.jpg" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url();?>./products.html">Novel</a></li>															
							<li><a href="<?php echo base_url();?>./products.html">Pelajaran</a></li>			
							<li><a href="<?php echo base_url();?>./products.html">Fiksi</a></li>							
							<li><a href="<?php echo base_url();?>./products.html">Non-Fiksi</a></li>
							<li><a href="<?php echo base_url();?>./products.html">Teknologi</a></li>
							<li><a href="<?php echo base_url();?>./products.html">Ekonomi</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo base_url();?>themes/images/carousel/bann1.jpg" alt="" />
						</li>
						<li>
							<img src="<?php echo base_url();?>themes/images/carousel/bann2.jpg" alt="" />
						</li>
					</ul>
				</div>			
			</section>
						
			<section class="main-content">
				<div class="row">
					<div class="span5">
					<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<?php
$today="SELECT DATE(NOW()) AS 'sekarang'";
				
					foreach($query->result() as $row)
					{
					$peminjam_kode=$row->last;
					}
					
$lastNoUrut = substr($peminjam_kode,2,3);
// nomor urut ditambah 1
$nextNoUrut = $lastNoUrut + 1;
// membuat format nomor transaksi berikutnya
$nextid = 'PM'.sprintf('%03s', $nextNoUrut);
					
					?>
						<form method="post" action="<?php echo base_url()?>index.php/chome/tambah_peminjam"
							enctype="multipart/form-data">
							<fieldset>
								<?php echo"
								<div class='control-group'>
									<div class='controls'>
										<input type='hidden' name='peminjam_kode' value='$nextid' class='input-xlarge' readonly>
									</div>
								</div>";
								?>
								<div class="control-group">
									<label class="control-label">Nama</label>
									<div class="controls">
										<input type="text" name="peminjam_kode" placeholder="Masukan nama" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Alamat</label>
									<div class="controls">
										<input type="password" name="peminjam_telp" placeholder="Masukan alamat" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Telepon</label>
									<div class="controls">
										<input type="password" name="peminjam_telp" placeholder="Masukan nomor telepon" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Foto</label>
									<div class="controls">
										<input type="file" name="peminjam_foto" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="username" placeholder="Masukan username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" name="password" placeholder="Masukan password" class="input-xlarge">
									</div>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
							</fieldset>
						</form>				
					</div>
				</div>
			</section>
			
			<section id="footer-bar"></section>
			
			<section id="copyright">
				<span>Copyright &copy 7 | By: Hathaway Corps</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>