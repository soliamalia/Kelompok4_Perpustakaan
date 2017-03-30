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
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Novel <strong>Terbaru</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/a.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Hatiku Memilihmu</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Arumi E</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/b.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Hujan</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Tere Liye</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/c.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Karena Aku Memilihmu</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Nenny Makmun</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/d.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Kesetiaan Seorang Sahabat</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Nita Tarlina</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/e.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Milea</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Pidi Baiq</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/f.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Lamunan Senja</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Diana Rizqy</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/g.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Merindu Cahaya de Amstel</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Arumi E</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/ladies/h.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Bintang pun Bertasbih</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Eko Hartono</a>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Mata <strong>Pelajaran</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/1.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Pendidikan Agama Islam</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas XII</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/2.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Ekonomi 2</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas XI</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/3.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Ekonomi</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas X</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/4.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Teknologi Informasi Komunikasi</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas XII</a>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/5.png" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Matematika</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas VII</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/6.png" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Fisika</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas XI</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/7.jpg" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Bahasa Indonesia</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas X</a>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="<?php echo base_url();?>product_detail.html"><img src="<?php echo base_url();?>themes/images/cloth/8.png" alt="" /></a></p>
														<a href="<?php echo base_url();?>product_detail.html" class="title">Sosiologi</a><br/>
														<a href="<?php echo base_url();?>products.html" class="category">Kelas X</a>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
								
					</div>				
				</div>
			</section>
			
			<section id="footer-bar">
				
			</section>
			
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