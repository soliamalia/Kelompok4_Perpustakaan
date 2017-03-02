<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>SMAN 2 Bandung Library</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		
		<!-- CSS -->
		<link href="<?php echo base_url();?>'http://fonts.googleapis.com/css?family=Arvo:400' rel='stylesheet' type='text/css'">
		<link href="<?php echo base_url();?>'http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'">
		<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>css/responsive.css">
		
		<script src="<?php echo base_url();?>js/modernizr.js"></script>
	</head>
	<body>
	
		
		<!-- WRAPPER -->
		<div class="wrapper">
		
			<!-- HEADER -->
			<header class="cf">
				<div id="logo"><img src="<?php echo base_url();?>img/sman2.png" height="130" width="130"></div>
			</header>
			<!-- ENDS HEADER -->
			
			<!-- NAV -->
			<nav class="cf">
				<ul id="nav" class="sf-menu">
					<li><a href="<?php echo base_url();?>">HOME</a></li>
					<li class="current-menu-item"><a href="<?php echo base_url();?>index.php/chome/getBuku">BUKU</a></li>
					<li><a href="<?php echo base_url();?>index.php/chome/daftar">PENDAFTARAN</a></li>
					<li><a href="<?php echo base_url();?>index.php/chome/aboutus">ABOUT US</a></li>	
					<li><a href="<?php echo base_url();?>index.php/clogin/login">LOG IN</a></li>					
				</ul>
			</nav>
			<!-- ENDS NAV -->
			
			
			<!-- MAIN -->
			<div id="main" class="cf">
			
				<div class="line-heading">
					<center><h2>Data Buku</h2></center>
				</div>
				<center><form action="<?php echo base_url();?>index.php/chome/cari" method="post">
					<tr>
					<td>Silahkan Pilih</td>
					<td><select name="pilih">
					<option value='buku_judul'>Judul Buku</option>
					<option value='buku_pengarang'>Pengarang</option>
					</td></select>
					<td>Keyword</td>
					<td><input type="text" name="keyword"></td>
					<td><input type=submit value="Cari" id="x"></td>
					</form></center><br>
				<?php if(count($tampilbuku) > 0) { ?>
			<table border="0" align="center">
			<?php
			foreach($tampilbuku as $row)
			{
			?>
			<tr>
				<td rowspan="10">
				<img src="<?php echo base_url();?>img/<?php echo $row->gambar;?>"   width="150" height="200"></td>
			</tr>
			<tr>
				<td>Kode Buku</td>
				<td>:</td>
				<td><?php echo $row->buku_kode;?></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><?php echo $row->kategori_nama;?></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td><?php echo $row->penerbit_nama;?></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><?php echo $row->buku_judul;?></td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td>:</td>
				<td><?php echo $row->buku_jumhal;?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><?php echo $row->buku_diskripsi;?></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td>:</td>
				<td><?php echo $row->buku_pengarang;?></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td>:</td>
				<td><?php echo $row->buku_tahun_terbit;?></td>
			</tr>
			<tr>
				<td>Stok Buku</td>
				<td>:</td>
				<td><?php echo $row->stok;?></td>
			</tr>
			<?php } ?>
			</table><br>
			<?php } ?>
			<div> <center><?php echo $this->pagination->create_links(); ?></center> </div>
				
			<!-- ENDS MAIN -->
				
			<!-- FOOTER -->
			<div class="footer-divider"></div>
			<footer class="cf">
				Copyright (c) 2017 | By: Hathaway Corps.
			</footer>
			<!-- ENDS FOOTER -->
		
		</div>
		<!-- ENDS WRAPPER -->
		
		<!-- JS -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>
		<script src="js/custom.js"></script>
		
		<!-- superfish -->
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<script src="js/css3-mediaqueries.js"></script>
		
		<script src="js/nivoslider.js"></script>
		<script src="js/tabs.js"></script>
		
	
		<!-- ENDS JS -->
	</body>
</html>
