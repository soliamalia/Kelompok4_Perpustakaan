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
					<li><a href="<?php echo base_url();?>index.php/cadmin/hal_admin">HOME</a></li>
					<li class="current-menu-item"><a href="<?php echo base_url();?>index.php/cadmin/tampil_petugas">DATA PETUGAS</a></li>
					<li><a href="<?php echo base_url();?>index.php/clogin/logout">LOG OUT</a></li>
					
				</ul>
			</nav>
			<!-- ENDS NAV -->
			
			
			<!-- MAIN -->
			<div id="main" class="cf">
			
				<div class="line-heading">
					<center><h2>Data Petugas</h2></center>
				</div>
				<center>
				<form action="<?php echo base_url();?>index.php/cadmin/cari" method="post">
					<tr>
					<td>Silahkan Pilih</td>
					<td><select name="pilih">
					<option value="petugas_kode">Kode</option>
					<option value="petugas_nama">Nama</option>
					</td></select>
					<td>Keyword</td>
					<td><input type="text" name="keyword"></td>
					<td><input type=submit value="Cari" id="x"></td>
					</form>
				</center><br>
				<table border="1" align="center">
			<tr align="center">
				<td>Kode Petugas</td>
				<td>Nama Petugas</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php
			foreach($tampil_petugas->result() as $row)
			{
			?>
			<tr align="center">
				<td><?php echo $row->petugas_kode;?></td>
				<td><?php echo $row->petugas_nama;?></td>
				<td><?php echo anchor("cadmin/tampilpetugas/$row->petugas_kode","Edit");?></td>
				<td><?php echo anchor("cadmin/hapus_petugas/$row->petugas_kode","Hapus");?></td>
			</tr>
			<?php } ?>
			</table>
			<center><a href="<?php echo base_url();?>index.php/cadmin/daftar"><h3>Tambah Petugas</h3></a></center>
				
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
